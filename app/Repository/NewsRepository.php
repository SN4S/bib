<?php

namespace App\Repository;

use App\Models\News;

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
        ]);
    }
    public function insertNews(array $news): bool
    {
        return News::query()->insert($news);
    }

    public function getAllNews():array
    {
        return News::query()->get()->toArray();
    }
}
