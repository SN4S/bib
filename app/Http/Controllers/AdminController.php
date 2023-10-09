<?php

namespace App\Http\Controllers;

use App\Http\Parsers\RSSParser;
use App\Repository\NewsRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(NewsRepository $repository){
        $news = $repository->getAllNews(12);

        return view('admin.panel',['news'=>$news]);
    }

    public function update(NewsUpdate $update){
        $n = new NewsRepository();
        $r = new RSSParser();
        $update->updateFeed($n,$r);

        return redirect(route('admin.panel'));
    }

    public function destroy(NewsRepository $repository){
        $repository->destructor();

        return redirect(route('admin.panel'));
    }
}
