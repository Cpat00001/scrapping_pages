<?php
include 'simple_html_dom.php';

//create DOM object
$html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');
//get elements
$list = $html->find('div[class="w3-bar w3-left"]',0);
$list_arr = $list->find('a');

echo "<table style='width:50%; border:1px solid grey'>";
echo "<tr><th><td>Title</td><td>Link</td></th></tr>";

for($i = 0; $i < sizeof($list_arr);$i++){
    echo "<tr>";
    echo "<td style='margin-right:2px;text-align:left;border: 1px solid black;max-width:50%'>". $list_arr[$i]->title ."</td>";
    echo "<td style='margin-right:2px;text-align:left;border: 1px solid black;max-width:50%'>". $list_arr[$i]->href ."</td></br>";
    echo "</tr>";
    echo "</table>";
}

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// get two elements inline and styling 
//create DOM object
//$html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');
// get to DOM elements
// $list = $html->find('div[class="w3-bar w3-left"]',0);
// $list_arr = $list->find('a');

// for($i = 0; $i < sizeof($list_arr); $i++){
//     echo "<span style='border: 1px solid black'>". $list_arr[$i]->title. "</span>  ";
//     echo "<span style='color:red'>". $list_arr[$i]->href. "</span></br>";
// }

//@@@@@@@@@@@@@@@@@@@@@@@@@
//create DOM object
//$html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');
//get DOM element
//$list = $html->find('div[class="w3-bar w3-left"]',0);
//loop elements using foreach loop and display PLAINTEX
// foreach($list->find('a') as $el){
//     echo $el->plaintext;
//     echo "</br>";
// }


//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//create DOM object
//$html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');
//get to DOM element
// $list = $html->find('div[class="w3-bar w3-left"]',0);
// $list_arr = $list->find('a');
//use "foreach loop"
// foreach($list_arr as $el){
//     echo $el. "</br>";
// }


//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//create DOM object
//$html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');
//get to DOM element;
//$list = $html->find('div[class="w3-bar w3-left"]',0);
//$list_array = $list->find('a');
//find elements using "for loop"
// for($i = 0 ; $i < sizeof($list_array); $i++){
//     echo $list_array[$i] . "</br>";
// }


//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

//create DOM object
//$html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');
//find elements
// foreach($html->find('a[class="topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button"]') as $el){
//     echo $el->title . "</br>";
// }

//@@@@@@@@@@@@@@@@@@@@@@@
//create dom object
// $html = file_get_html('https://www.w3schools.com/PHP/DEfaULT.asP');

//find elements
// foreach($html->find('a') as $element){
//     echo $element->href . "</br>";
// }

//@@@@@@@@@@@@@@@@@@@@@@@@@
//create dom object
//$html = file_get_html('https://www.google.co.uk/');

//find all images
// foreach($html->find('img') as $elem){
//     echo $elem->src. "<br>";
// }




?>