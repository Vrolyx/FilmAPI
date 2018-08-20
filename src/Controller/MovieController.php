<?php
/**
 * Created by PhpStorm.
 * User: WesselVrolijks
 * Date: 20/08/2018
 * Time: 14:12
 */

namespace App\Controller;



use App\Entity\Search;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends AbstractController
{
    public function index(Request $request){
        $search =  new Search();

        $form = $this->createFormBuilder()
            ->add('search', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Zoek'))
            ->getForm();

        $form->handleRequest($request);

        $output = new ConsoleOutput();

        $output->writeln("dfsgddfgsgfdsfg");

        if($form->isSubmitted() && $form->isValid()){
            // TODO: Code for API Parser

            $search = $form["search"]->getData();


            return new Response($search);

        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}