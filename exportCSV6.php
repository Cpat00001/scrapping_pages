<?php
include 'simple_html_dom.php';
// DZIALAJACY CSV WYSWIETLA W KOLUMNACH NAZWA/CENA
//create DOM object
$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
//get DOM element
//$list = array($html->find('div[class="product-listing__content__bottom"]'));

//to CSV
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

$fp = fopen("php://output", "w");

//COLUMNS HEADER IN CSV
fputcsv($fp,array('Item Name','Old Price','New Price'));

// @@@@@@@ DZIALA ELEGANCKO DRUKUJE KOLUMNE CZYSTEGO TEKSTU BEZ TAGOW DO CSV
// $hed = array();
// foreach($html->find('h2[class=product-listing__title]') as $header){
//     $headline[] = $header->plaintext;
//     fputcsv($fp,$headline,"\n");
// }
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// Ta petla foreach ponizej WPISUJE CZYSTY TEKST BEZ HTML TAGOW,ALE NIE ROBI KOLUMN
$x = array();
$oldprice = array();
foreach($html->find('div[class=product-listing__content__bottom]') as $elem){
    // dziala wyswietla w kolumne $x[] = $elem->children(0)->plaintext;
    $oldprice[] = $elem->plaintext;
    //fputcsv($fp,$x,"\n");
    fputcsv($fp,$oldprice,"\n");
} 

// foreach($list as $item){
//     fputcsv($fp,$item,"\n");
    
// }
fclose($fp);


?>