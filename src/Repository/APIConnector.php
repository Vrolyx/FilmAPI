<?php
/**
 * Created by PhpStorm.
 * User: WesselVrolijks
 * Date: 20/08/2018
 * Time: 18:02
 */

namespace App\Repository;


use GuzzleHttp\Client;

class APIConnector
{
    public function getMoviesByName($search){
        $client = new Client(['base_uri' => 'https://api.themoviedb.org/']);
        // Replace space with comma for API search
        $q = str_replace(" ", ",", $search);
        $params = [
            'api_key' => '3629693dbbddf2430cd50ef1344f9aad',
            'language' => 'en-US',
            'query' => $q,
            'page' => '1',
            'include_adult' => 'false'
        ];
        $res = $client->request('GET', '/3/search/movie', ['form_params' => $params]);
        $json = $res->getBody();
        $arr = json_decode($json, true);
        $result = $arr["results"];

        return $result;
    }
}