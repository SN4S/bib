<?php

namespace App\Dto;

use Carbon\Carbon;

class DtoNews
{
    public function __construct(public string $title,
                                public string $link,
                                public string $description,
                                public Carbon $pubdate,
                                public string $image,
                                public string $source_name
){}
}
