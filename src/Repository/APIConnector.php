<?php
/**
 * Created by PhpStorm.
 * User: WesselVrolijks
 * Date: 20/08/2018
 * Time: 18:02
 */

namespace App\Repository;


use Symfony\Component\Console\Output\ConsoleOutput;

class APIConnector
{
    public function getMoviesByName($search){
        // Replace space with comma for API search
        $q = str_replace(" ", ",", $search);
        $apiKey = '3629693dbbddf2430cd50ef1344f9aad';
        $json = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=' . $apiKey . '&language=en-US&query=' . $q . '&page=1&include_adult=false');
        $arr = json_decode($json, true);
        $result = $arr["results"];

        return $result;
    }
}