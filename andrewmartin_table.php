<?php
include 'simple_html_dom.php';

//create DOM object
$html = file_get_html('https://www.andrewmartin.co.uk/furniture/chairs');
//get DOM element
$list = $html->find('div[class="product-listing__content__bottom"]');

echo "<table style='width:50%;border: 2px solid grey'>";
echo "<thead style='background-color:grey'><tr style='text-align:center;color:white'>";
echo "<td style='width=20%;font-size:15px'>Product name</td>";
echo "<td style='width75%;font-size:15px'>Price</td></tr></thead>";


foreach($list as $elem){
    //echo $elem. "</br>";
    echo "<tr>";
    echo "<td style='width=20%;font-size:10px;border: 1px solid black'><p>".$elem->children(0)."</p></td>";
    echo "<td style='width75%;font-size:15px;border: 1px solid black'>".$elem->children(1)."</td>";
    echo "</tr>";
}
echo "</table>";
include './footer.php';


?>