<?php

namespace App\Http\Parsers;

use App\Dto\DtoNews;
use Carbon\Carbon;
use DOMDocument;

class RSSParser
{
    public function pars(string $url){
        $feed = new DOMDocument();
        $feed->load($url);
        $items = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('item');
        foreach ($feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('image') as $key => $item){
            $source = $item->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
            $image = $item->getElementsByTagName('url')->item(0)->firstChild->nodeValue;
        }

        $new_table = array();
        foreach($items as $key => $item) {
            if($item->getElementsByTagName('description')->item(0)->firstChild){
            $title = $item->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
            $description = $item->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
            $pubDate = $item->getElementsByTagName('pubDate')->item(0)->firstChild->nodeValue;
            $pubDate = Carbon::parse($pubDate);
            $guid = $item->getElementsByTagName('guid')->item(0)->firstChild->nodeValue;

            $d = new DtoNews($title,$guid,$description,$pubDate,$image,$source);
            $new_table[]=$d;}
        }
        return $new_table;
    }
}
