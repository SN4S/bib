<?php

namespace App\Http\Parsers;

use App\Dto\DtoNews;
use DOMDocument;

class RSSParser
{
    public function pars(string $url){
        $feed = new DOMDocument();
        $feed->load($url);
//        $json = array();
//        $json['title'] = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
//        $json['description'] = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
//        $json['link'] = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('link')->item(0)->firstChild->nodeValue;
        $items = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('item');

        $new_table = array();
        foreach($items as $key => $item) {
            if($item->getElementsByTagName('description')->item(0)->firstChild){
            $title = $item->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
            $description = $item->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
            $pubDate = $item->getElementsByTagName('pubDate')->item(0)->firstChild->nodeValue;
            $guid = $item->getElementsByTagName('guid')->item(0)->firstChild->nodeValue;

            $d = new DtoNews($title,$guid,$description,$pubDate);
            $new_table[]=$d;}
        }
        return $new_table;
    }
}
