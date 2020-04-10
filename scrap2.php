<?php
include 'simple_html_dom.php';
//create DOM object
$html = file_get_html('https://www.bbc.co.uk/news');
//get element
$arr1 = $html->find('div[class=nw-c-news-navigation]');
//get "New Navigation" text
for($i = 0; $i < sizeof($arr1);$i++){
     echo $arr1[$i]->children(1)."</br>";
}
echo "Get a href </br>";
//get a href
for($i = 0;$i < sizeof($arr1);$i++){
    echo $arr1[$i]->children(0)->href."</br>";
}
//get array of headers from nav
$list = $html->find('ul[class=gs-o-list-ui--top-no-border nw-c-nav__wide-sections]');

for($i = 0;$i < sizeof($list);$i++){
    echo $list[$i]."</br>";
}
echo "Get list of promo articles BBC </br>";
//get list of promo articles BBC
$promo = $html->find('div[class=gs-c-promo-body gel-1/2@xs gel-1/1@m gs-u-mt@m]');
for($i=0;$i < sizeof($promo);$i++){
    echo $promo[$i]->first_child()."</br>";
}
echo "<h1 style='color:red'>Get list of 'paragraphs p' of promo articles BBC</h1> </br>";
//get list of "paragraphs" of promo articles BBC
$promo = $html->find('div[class=gs-c-promo-body gel-1/2@xs gel-1/1@m gs-u-mt@m]');
for($i=0;$i < sizeof($promo);$i++){
    echo $promo[$i]->children(0)->children(1)."</br>";
}

//just output webpage into plaintext
//echo file_get_html('http://www.google.com/')->plaintext;

//create DOM from string
//$html = str_get_html('<div id="one">Hello</div><div id="two">World</div>');
//change class for div 0 
//$html->find('div',0)->class = "three";
//get access to div1 and change/set text
//$html->find('div',0)->innertext = "Change the...";
//echo $html;

//create DOM from string
// $html = str_get_html('<div id="hello">Hello</div><div id="world">world</div>');

// $html->find('div',1)->class='bar';
// $html->find('div[id=hello]',0)->innertext = "foo";
// echo $html;

//create DOM object
//$html = file_get_html('https://www.google.co.uk/');

//find all images
// foreach($html->find('a') as $elem){
//     echo $elem->href."</br>";
// }



?>