<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="" lang="">
<head>
<title>ZNews</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" >
</head>
<body>
<div id="page_wrapper">
  <div id="header_wrapper">
    <div id="header">
      <h1>News<font color="#FFDF8C">Portal</font></h1>
      <h2></h2>
    </div>
    <div id="navcontainer">
      <ul id="navlist">
        <li id="active"><a href="/update" target="_blank" id="current">Add new news</a></li>
      </ul>
    </div>
  </div>
    <div></div>
    <h1 align=center>Прямая трансляция с поле боя </h1>
    <div class="container" align=center>
            <iframe src="https://www.youtube.com/embed/aFnXjlkPwfc" height="300px" width="450"></iframe>
    </div>

    @foreach($news as $new)
        <div>
        <h3>{{$new['title']}}</h3>
        <p> <a href="{{$new['link']}}">Первий источник</a> <p>
            {{$new['description']}}
            </p>
        <a href="{{$new['pubdate']}}"></a>
        </div>
    @endforeach
  <div id="footer"> <a href="http://all-free-download.com/free-website-templates/">Link One</a> | <a href="http://all-free-download.com/free-website-templates/">Link Two</a> | <a href="http://all-free-download.com/free-website-templates/">Link Three</a> | <a href="http://all-free-download.com/free-website-templates/">Link Four</a> | <a href="http://all-free-download.com/free-website-templates/">Link Five</a> <br />
</div>
        </div>
</body>
</body>
</html>

<?php
//    $sites = file_get_contents('/home/sn4s/bibm/sites.txt');
//    echo $sites;

