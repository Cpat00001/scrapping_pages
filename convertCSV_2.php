<?php
include("simple_html_dom.php");
$html = file_get_html('https://portal.mazerattan.com/all');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');
$fp = fopen("php://output", "w");

$title = $html->find('div[class="card-header product-name equal-heights"]');

foreach( $html->find('h3[class=card-header product-name equal-heights]') as $row){
    echo $tytul = $row."</br>";
    var_dump($tytul);

    fputcsv($fp,$tytul);
}

//while($row = $list){
    //$row."</br>";
    //fputcsv($fp,$row);
//}
//var_dump($row);
// fputcsv($fp,$list);
// fclose($fp);


//@@@@@@@@@@ w miare dzialajacy kod, pisze do CSV

// header('Content-type: application/ms-excel');
// header('Content-Disposition: attachment; filename=sample.csv');
// $fp = fopen("php://output", "w");

//header
//fputcsv($fp, array("Furniture name", "Link URL"));
//rows
// foreach( $html->find('h3[class=card-header product-name equal-heights]') as $row){

//             $tytul = $row->children(0)->children(0)->plaintext;
//             $link = $row->children(0)->href;
//             echo $tytul. "</br>";
//             echo $link."</br>";
            // foreach($tytul as $rzad){
            //     fputcsv($fp,$rzad);
            // }
            // foreach($link as $rzad2){
            //     fputcsv($fp,$rzad2);
            // }
        //};
?>