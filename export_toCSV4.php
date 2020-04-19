<?php
include 'simple_html_dom.php';

//tutaj jest dzialajacy i wyswietlajacy w kolumnach output ze scrpingu stronki

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

//create DOM object
$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
//open write to file
$output = fopen("php://output","w");
fputcsv($output,array('item Name','Price'));
//get DOM element
$list = array($html->find('h2[class=product-listing__title]'));
//druga kolumna
$cena = array($html->find('span[class=product-listing__price product-listing__price--new]'));


    foreach($list as $elem){
          //dodaj "\n" zeby wyniki podac w nowej linii - czyli kolumna
          fputcsv($output,$elem,"\n");
        }
        //fclose($output);

    //druga kolumna
    foreach($cena as $col2){
          fputcsv($output,$col2,"\n");
        }
    fclose($output);


// @@@@@@@@@@@@@@@@@@@@ wyswietla wynik jako kolumna WSZYSTKO JEST OK - dodalem jako 3 parametr "\n"
// header('Content-type: application/ms-excel');
// header('Content-Disposition: attachment; filename=sample.csv');

// //create DOM object
// $html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
// //open write to file
// $output = fopen("php://output","w");
// fputcsv($output,array('item Name','item Number'));
// //get DOM element
// $list = array($html->find('h2[class=product-listing__title]'));

// foreach($list as $elem){
//   //dodaj "\n" zeby wyniki podac w nowej linii - czyli kolumna
//   fputcsv($output,$elem,chr(9),"\n");
// }
// fclose($output);

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ dzialajacy kod wszystko druguj,ale w linie nie w kolumnie

// header('Content-type: application/ms-excel');
// header('Content-Disposition: attachment; filename=sample.csv');

// //create DOM object
// $html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
// //open write to file
// $output = fopen("php://output","w");
// fputcsv($output,array('item Name','item Number'));
// //get DOM element
// $list = array($html->find('h2[class=product-listing__title]'));

// foreach($list as $elem){
//   fputcsv($output,$elem);
// }
// fclose($output);


// $th = array();
// foreach($list as $row){
//     $th [] = $row->plaintext;
//     print_r($row->plaintext);
//     //var_dump($row->plaintext);
//     fputcsv($output,$th);
// }
// fclose($output);

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// $list = array (
//     array("Peter", "Griffin" ,"Oslo", "Norway"),
//     array("Glenn", "Quagmire", "Oslo", "Norway")
//   );
  
//   $file = fopen("contacts.csv","w");
  
//   foreach ($list as $line) {
//     fputcsv($file, $line);
//   }
  
//   fclose($file);

?>