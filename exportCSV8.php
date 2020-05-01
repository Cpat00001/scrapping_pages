<?php
include 'simple_html_dom.php';
// DZIALAJACY CSV WYSWIETLA W KOLUMNACH NAZWA/OLD PRICE/NEW PRICE PLAINTEXT - no html tags
//create DOM object
//$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
$html = file_get_html('https://www.thelibracompany.com/all-products/');

//$product = $html->find('.product-listing__content__bottom');
$obiekt = $html->find('.media-content');
$imghref = $html->find('.media-content',0)->children(0)->href;
$title = $html->find('.media-content',0)->children(1)->children(0)->plaintext;

//echo $title;

//elementy do array
$data[] = array($title,$imghref);

// foreach($x as $prod){
//      $prod;
// }

//to CSV
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

$fp = fopen("php://output", "w");

// // // //COLUMNS HEADER IN CSV
fputcsv($fp,array('Product/ SKU','Image Href'));

//$x = array();
foreach($data as $prod){
    //$x[] = $prod;
    //echo "<br>";
    fputcsv($fp,$prod);
}
fclose($fp);

// $x = array();
//  foreach($html->find('div[class=product-listing__content__bottom]') as $elem){
    
//     //$x[] = $elem->plaintext;
//     $x[] = $elem->children(0)->plaintext,
            
//     fputcsv($fp,$x,"\n");
// }


