<?php
include 'simple_html_dom.php';

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

//create DOM object
$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
//open write to file
$output = fopen("php://output","w");
//get DOM element
$list = $html->find('h2[class=product-listing__title]');

$th = array();
foreach($list as $row){
    $th [] = $row->plaintext;
    var_dump($row->plaintext);
    fputcsv($output,$th);
}
fclose($output);

?>