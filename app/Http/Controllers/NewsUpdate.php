<?php

namespace App\Http\Controllers;


use App\Http\Parsers\RSSParser;
use App\Repository\NewsRepository;
use Illuminate\Http\Request;

class NewsUpdate extends Controller
{
    public function UpdateFeed(NewsRepository $newsRepository,RSSParser $RSSParser){
        $sites=file('/home/sn4s/bibm/sites.txt', FILE_IGNORE_NEW_LINES);
        foreach ($sites as $linenum=>$line){
            $news=$RSSParser->pars($line);
            foreach ($news as $n_num=>$n_page){
                $newsRepository->save($n_page);
            }
        }
        echo "<script>window.close();</script>";
    }
}
