<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $x = array('brown', 'coffee', 'caffeine');
    // list($color, $drink, $moc) = $x;
    // echo "$drink ma color $color is zawiera $moc <br> ";

    // foreach ($x as $a) {
    //     echo $a . "<br>";
    // }
    // $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
    // $pieces = explode(" ", $pizza);
    // echo $pieces[0];
    // $str = 'one|two|three|four';
    // print_r(explode('|', $str, 4));
    // $szukany = "y";
    // $x = 'xyz';
    // $pos1 = stripos($szukany, $x);

    // if ($pos1 === false) {
    //     echo "istnieje $szukany w $x";
    // }
    // $s = 'z';
    // $abc = "abrakadabra";
    // $wynik = stripos($s, $abc);

    // if ($wynik === true) {
    //     echo "$z zawiera sie w $abc";
    // } else {
    //     echo "Nie znaleziono $s w $abc";
    // }

    // isset() + empty()
    // $x = '';
    // if (isset($x)) {
    //     echo "value is set </br>";
    //     if (empty($x)) {
    //         echo "value is empty but not NULL";
    //     } else {
    //         echo 'value is not empty';
    //     };
    // } else {
    //     echo "value is NOT set </br>";
    // }
    // $a = array('test' => 1, 'hello' => NULL, 'pie' => array('one' => 'one'));
    // var_dump(isset($a['test']));
    // var_dump(isset($a['pie']['two']));
    // var_dump(isset($a['pie']['two']));
    // $b = array(1 => 'Januar', 2 => 'Februar');
    // var_dump($b[2]);

    // $t = date('H');

    // if ($t <br 12) {
    //     echo 'drink a coffee';
    // } elseif ($t > 12 && $t <br 18) {
    //     echo 'drink the second coffee';
    // } else {
    //     echo "its too late for a coffee";
    // }

    // data + czas aktualny
    // $t = date("m.d.y H:m:s");
    // echo $t;

    // is_object()
    // function get_students($obj)
    // {
    //     if (!is_object($obj)) {
    //         echo "submitted data is not an object";
    //         return false;
    //     }
    //     return $obj->students;
    // }

    // $obj = new stdClass();
    // $obj->students = array('Tom', 'Tim', 'Mike');
    // $x = 'Tomek';

    // get_students($obj);

    // foreach ($obj as $a) {
    //     echo implode(",", $a);
    // }

    //integer
    // $justnumber = 1123445;
    // var_dump($justnumber);
    // echo "</br>";
    // $large_number = 2141234.8;
    // var_dump($large_number);

    //######## intval()
    // function abc($x)
    // {
    //     if (intval($x) <br 43) {
    //         echo "wartosc jest mniejsza niz 43 i wynosi : " . intval($x);
    //     } else {
    //         echo "unfortunately submitted value is more than 43 - cannot be accepted ";
    //     }
    // }
    // abc(11);

    //################# ?? coalescing operator ??
    // $a;
    // $b = $a ?? 'value not passed </br>';
    // echo $b;

    // $c = isset($a) ? 'submitted value: ' . $a : 'you need to pass a velue not empty field';
    // echo $c;




    ?>

</body>

</html>