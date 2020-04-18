<?php
include("simple_html_dom.php");
$html = file_get_html('https://portal.mazerattan.com/all');


header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');
$fp = fopen("php://output", "w");

echo "<table>";

echo  "<tr>";

        foreach( $html->find('h3[class=card-header product-name equal-heights]') as $row){

            $tytul = $row->children(0)->children(0);
            $link = $row->children(0)->href;
            echo $tytul. "</br>";
            echo $link."</br>";
        };
        
echo    "</tr>";

echo "</table>";

?>