<?php

namespace App;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class Api{
    //
     public function getNews($source)
    {

	    try {
	 		
	           $client = new GuzzleHttpClient();

		           $apiRequest = $client->request('GET', 'https://newsapi.org/v1/articles?source='.$source.'&sortBy=top&apiKey=2750314acb3546178fde382fad32adad' 
		           );

	          $content = json_decode($apiRequest->getBody()->getContents(), true);
	 		
	 		return $content['articles'];

	        } catch (RequestException $e) {
	          //For handling exception
	          echo Psr7\str($e->getRequest());
			  if ($e->hasResponse()) {
			    echo Psr7\str($e->getResponse());
			  }
		 }
	}

	public function getAllSources()
    {

	    try {
	 		
	           $client = new GuzzleHttpClient();
	          
		           	$apiRequest = $client->request('GET', 'https://newsapi.org/v1/sources?language=en' 
		           );
	           
	 
	          $content = json_decode($apiRequest->getBody()->getContents(), true);
	 		
	 		return $content['sources'];

	        } catch (RequestException $e) {
	          //For handling exception
	           echo Psr7\str($e->getRequest());
			   if ($e->hasResponse()) {
			        echo Psr7\str($e->getResponse());
			    }
	      }
	}
}


