<?php

namespace App\Dto;

class DtoNews
{
    public function __construct(public string $title,
                                public string $link,
                                public string $description,
                                public string $pubdate
){}
}
