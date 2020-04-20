<?php
include 'simple_html_dom.php';
// DZIALAJACY CSV WYSWIETLA W KOLUMNACH NAZWA/CENA
//create DOM object
$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
//get DOM element
$list = array($html->find('div[class="product-listing__content__bottom"]'));

//to CSV
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

$fp = fopen("php://output", "w");

//$item->children(0);
//$item->children(1);
//HEADER
fputcsv($fp,array('Item Name','Old Price','New Price'));

foreach($list as $item){

    fputcsv($fp,$item,"\n");
    
}
fclose($fp);


?>