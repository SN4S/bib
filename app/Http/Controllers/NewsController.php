<?php

namespace App\Http\Controllers;

use App\Http\Parsers\RSSParser;
use App\Repository\NewsRepository;
use App\Service\NewsService;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function getAllNews(NewsRepository $newsRepository)
    {
        $news=$newsRepository->getAllNews();
        return view('index',['news'=>$news]) ;
    }

    public function openOneNews(NewsRepository $newsRepository, $id){
        $news=$newsRepository->getOneNews($id);
        return view('news',['news'=>$news]);
    }
}
