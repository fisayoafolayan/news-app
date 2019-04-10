<?php
/**
 * Created by PhpStorm.
 * User: olufisayoafolayan
 * Date: 2019-03-18
 * Time: 16:23
 */

namespace App\Helpers;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class Helper
{

    /**
     * @param $url_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function makeApiCalls($url_params)
    {
        try {
            $client = new Client();

            $apiRequest = $client->request('GET', config('app.news_api_url') .$url_params.'&apiKey=' . config('app.news_api_key'));

            return json_decode($apiRequest->getBody()->getContents(), true);


        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}