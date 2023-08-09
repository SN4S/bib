<?php

namespace App\Service;
use App\Repository\NewsRepository;

class NewsService
{
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }
    public function importNews(array $news)
    {
        $this->newsRepository->insertNews($news);
    }

    public function getAllNews(): array
    {
        return  $this->newsRepository->getAllNews();
    }
}
