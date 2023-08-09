<?php

namespace App\Http\Controllers;



use App\Service\NewsService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ParseWebSiteController extends Controller
{
    public function parseWebSite(NewsService $newsService)
    {
        $client = new Client();
        $website = $client->get('https://d85c-194-44-34-236.eu.ngrok.io/edaily-news');

        return response()->json(json_decode($website->getBody()->getContents(),true));
    }
}
