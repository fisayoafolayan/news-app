<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function  displayNews(Request $request)
    {
        $defaultNewsSource = 'cnn';

        $apiModel = new Api();

        $response['news'] = $apiModel->fetchAllNews($defaultNewsSource);
        $response['news_sources'] = $this->fetchAllNewsSources();

        return view('welcome', $response);

    }


    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetchAllNewsSources()
    {
        $api = new Api;
        return $api->getAllSources(); //retrieve all news sources

    }
}
