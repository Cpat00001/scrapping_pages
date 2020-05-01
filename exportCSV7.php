<?php
include 'simple_html_dom.php';
// DZIALAJACY CSV WYSWIETLA W KOLUMNACH NAZWA/OLD PRICE/NEW PRICE PLAINTEXT - no html tags
//create DOM object
$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');

//to CSV
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

$fp = fopen("php://output", "w");

//COLUMNS HEADER IN CSV
fputcsv($fp,array('Item Name','Old Price','New Price'));

$x = array();
 foreach($html->find('div[class=product-listing__content__bottom]') as $elem){
    
    //$x[] = $elem->plaintext;
    $x[] = $elem->children(0)->plaintext;
    fputcsv($fp,$x,"\n");
}



//@@@@@@ Ta petla foreach ponizej WPISUJE CZYSTY TEKST BEZ HTML TAGOW,ROBI KOLUMNY

// $x = array();
// foreach($html->find('div[class=product-listing__content__bottom]') as $elem){
    
//     //$x[] = $elem->plaintext;
//     $x[] = $elem;
//     fputcsv($fp,$x,"\n");
// }

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

fclose($fp);


?>