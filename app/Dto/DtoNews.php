<?php

namespace App\Dto;

class DtoNews
{
    public function __construct(public readonly string $title,
                                public readonly string $link,
                                public readonly string $description,
                                public readonly string $pubdate
){}
}
