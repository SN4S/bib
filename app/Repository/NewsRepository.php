<?php

namespace App\Repository;

use App\Models\News;
use Carbon\Carbon;

class NewsRepository
{
    /**
     * @param array $news
     * @return bool
     */
    public function save($table){
        News::query()->updateOrCreate([
            'title'=>$table->title,
            'link'=>$table->link,
        ],[
            'title'=>$table->title,
            'link'=>$table->link,
            'description'=>$table->description,
            'pubdate'=>$table->pubdate,
            'image'=>$table->image,
            'source_name'=>$table->source_name,
        ]);
    }
    public function insertNews(array $news): bool
    {
        return News::query()->insert($news);
    }

    public function getAllNews($pages = 15)
    {
        $news = News::query()->orderByDesc('pubdate')->paginate($pages);
        foreach ($news as $key=>$val){
            $val['pubdate']= new Carbon($val['pubdate']);
        }
        return $news;
    }

    public function getOneNews($id){

        return News::query()->find($id);
    }

    public function destructor(){
        News::query()->truncate();
    }
}
