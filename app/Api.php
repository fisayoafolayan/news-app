<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Psr7;
use Illuminate\Support\Arr;

class Api extends Model
{

    /**
 * @return mixed
 * @throws \GuzzleHttp\Exception\GuzzleException
 */
    public function fetchAllNews()
    {
        $url_params = 'everything?q=news';
        $response = $this->makeApiCalls($url_params);

        return Arr::get($response,'articles');

    }


    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllSources()
    {
        $url_params = 'sources';
        $response = $this->makeApiCalls($url_params);

        return Arr::get($response,'sources');
    }

    /**
     * @param $url_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function makeApiCalls($url_params)
    {
        try {
            $client = new Client();

            $apiRequest = $client->request('GET', config('app.news_api_url') .$url_params.'?&apiKey=' . config('app.news_api_key'));

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
