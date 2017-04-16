<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;


class ApiController extends Controller
{
 
	public function newsapi(Request $request)
	{
		if (($_SERVER["REQUEST_METHOD"] == "POST")){

		$source 		 		= $_POST['source'];
		$split_input 	 		= explode(':', $source);
		$source 		 		= trim($split_input[0]);

		$data['source_name']    = $split_input[1];

		}

		if (empty($source)) {
		
			$source 				= 'cnn';
			$data['source_name']    = 'CNN';
			@$data['source_id'] 		= $source;
		}
	  
      $api = new Api;

      $data['news']    		= $api->getNews($source);
      $data['news_sources'] = $this->allSources();

      return view('welcome', $data);
    }

    public function allSources()
	{
      $api 		  = new Api;
      $allSources = $api->getAllSources();

      return $allSources;
    }

}
