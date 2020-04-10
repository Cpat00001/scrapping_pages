<?php
include 'simple_html_dom.php';

$html = file_get_html('https://www.culinaryconcepts.co.uk/lighting/view-all-products');

//$list = $html->find('div[class="product details product-item-details"]');
//$list_arr = $list->find('a');
$es = $html->find('ol li');

foreach($es as $elem){
    echo $elem."</br>";
}
echo "<h5> Product details</h5>";
$des = $html->find('div[class="product details product-item-details"]');
$cena = $html->find('div[class="price-box price-final_price"]');
foreach($des as $elem){
    echo $elem."</br>";
}
echo "<h1>Prices</h1>";
foreach($cena as $elecena){
    echo $elecena."<br>";
}




//@@@@@@ working section @@@@@@@@@@@
//create DOM object
//$html = file_get_html('https://www.andrewmartin.co.uk/furniture/sofas/truman-junior-white-linen-sectional-sofa');
//single product specification
// echo $a = $html->find('h3[class=accordion__title js-accordion-toggle]',0);
// echo $corner = $html->find('th[class=product__table__title]',0);

// $tab = $html->find('table[class="product__table"]');

// foreach($tab as $elem){
//     echo $elem."</br>";
//}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@

?>