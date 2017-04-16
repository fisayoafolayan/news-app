<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;


class ApiController extends Controller
{
 
	public function newsapi(Request $request)
	{
		if (($_SERVER["REQUEST_METHOD"] == "POST")){
		$source = $_POST['source'];
		}

		if (empty($source)) {
		
			$source = 'cnn';
		}
	  
      $api = new Api;
      $data['news']    = $api->getNews($source);
      $data['news_sources'] = $this->allSources();

      return view('welcome', $data);
    }

    public function allSources()
	{
      $api = new Api;
      $allSources = $api->getAllSources();

      return $allSources;
    }

}
