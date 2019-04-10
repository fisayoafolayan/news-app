<?php

namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Arr;

/**
 * Class Api
 * @package App
 */
class Api extends Model
{

    /**
 * @return mixed
 * @throws \GuzzleHttp\Exception\GuzzleException
 */
    public function fetchAllNews()
    {
        $urlParams = 'everything?q=news';
        $response = (new Helper)->makeApiCalls($urlParams);

        return Arr::get($response,'articles');

    }


    /**
     * @param $newsSource
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetchNewsFromSource($newsSource)
    {
        $urlParams = 'top-headlines?sources=' . $newsSource;
        $response = (new Helper)->makeApiCalls($urlParams);

        return Arr::get($response,'articles');

    }


    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllSources()
    {
        $urlParams = 'sources?';
        $response = (new Helper)->makeApiCalls($urlParams);

        return Arr::get($response,'sources');
    }

}
