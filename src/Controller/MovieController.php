<?php
/**
 * Created by PhpStorm.
 * User: WesselVrolijks
 * Date: 20/08/2018
 * Time: 14:12
 */

namespace App\Controller;



use App\Entity\Search;
use App\Repository\APIConnector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends AbstractController
{
    public function list(Request $request){
        $search =  new Search();

        $form = $this->createFormBuilder()
            ->add('search', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Zoek'))
            ->getForm();

        $form->handleRequest($request);

        $output = new ConsoleOutput();

        if($form->isSubmitted() && $form->isValid()){
//            $paginator  = $this->get('knp_paginator');

            $search = $form["search"]->getData();

            $apiConnector = new APIConnector();

            $results = $apiConnector->getMoviesByName($search);

//            $pagination = $paginator->paginate(
//                $results,
//                $request->query->getInt('page', 1),
//                1/*limit per page*/
//            );

            return $this->render('default/index.html.twig', array(
                'form' => $form->createView(),
                'results' => $results,
            ));
        }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}