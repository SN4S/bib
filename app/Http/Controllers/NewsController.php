<?php

namespace App\Http\Controllers;

use App\Service\NewsService;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function getAllNews(NewsService $newsService)
    {
        return view('index',[
            'news' => $newsService->getAllNews(),
        ]) ;
    }
}
