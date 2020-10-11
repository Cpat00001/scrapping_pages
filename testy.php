<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //setcookie()
    // $c = 'keep me in a browser';
    // setcookie('exampleCookie', $c);
    // $id_num = '1234';
    // $id_name = 'ID';
    // setcookie($id_name, $id_num);


    // //get cookie value and do something
    // if (isset($_COOKIE[$id_name])) {
    //     echo 'cookie set and value is: ' . $id_num;
    // }


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

    // in_array()
    // $a = array('mac', 'apple', 'windows', 'debian');
    // $b = 'apple';

    // function test($b, $a)
    // {
    //     if (in_array($b, $a)) {
    //         echo "<h1>Exists</h1>";
    //     } else {
    //         echo "doesnt exist";
    //     }
    // }
    // test($b, $a);

    //########################## is_string()
    // $values = array(false, true, null, 'abc', '23', 23, 23.5, '');
    // foreach ($values as $value) {
    //     echo "is_string( ";
    //     var_export($value);
    //     echo ") = ";
    //     echo var_dump(is_string($value)) . "</br>";
    // }
    //######################## function_exists()
    // function example()
    // {
    //     return true;
    // }
    // $word = "Exists";

    // function checkOther($w)
    // {
    //     if (function_exists('example')) {
    //         echo "sample function $w";
    //     }
    // }
    // checkOther($word);
    // ########### defined();
    // $def = 'defined';
    // define('HALO', "some random text here");
    // $txt = 'given CONSTANT IS SET';
    // $txt2 = 'VARIABLE is set and value is: ';

    // function test()
    // {
    //     if (defined('HALO')) {
    //         echo $txt;
    //     } else {
    //         echo 'not defined';
    //     }
    //     if (isset($def)) {
    //         echo $txt2 . ' ' . $def;
    //     }
    // }
    // test();

    //########## sprintf()
    // $num = 5;
    // $place = 'tree';
    // $format = 'there are %d monkeys in the %s ';
    // echo sprintf($format, $num, $place);
    // echo "</br>";
    // $format2 = 'the %2$s contains %1$d monkeys';
    // echo sprintf($format2, $num, $place);
    // echo "</br>";
    // $format3 = 'the %2$.4s contains %1$05d monkeys';
    // echo sprintf($format3, $num, $place);

    // ############## usleep() + sleep()
    // echo date("h:i:s") . "\n";
    // //usleep(2000000);
    // sleep(3);
    // echo "</br>";
    // echo "Three second later...</br>";
    // echo date('h:i:s');

    //############ microtime()
    // echo microtime();
    // echo "</br>";

    // function micro_float()
    // {
    //     list($a, $b) = explode(" ", microtime());
    //     return ((float)$a + (float)$b);
    // }
    // $start = micro_float();

    // //sleep for a moment
    // sleep(2);

    // $end = micro_float();
    // $work = $end - $start;
    // echo "done during period of time: " . $work;

    // is_object()
    // function check_object($obiekt)
    // {
    //     if (!is_object($obiekt)) {
    //         echo "NOT an Object";
    //         return false;
    //     }
    //     return $obiekt->students;
    // };

    // $obiekt = new stdClass();
    // $obiekt->students = array('Tomek', 'Romek', 'Kasia');

    // var_dump(check_object($obiekt));

    //in_array()


    // $name = "Marian";

    // function check_existance($name)
    // {
    //     $os = array('Julek', 'Marian', 'Toeofil');

    //     if (in_array($name, $os)) {
    //         echo "yes";
    //     } else {
    //         echo "no";
    //     }
    // }
    // check_existance($name);

    // printf()

    // $txt = 'wydruk';
    // printf("%s\n", $txt);
    // echo "<br/>";
    // printf("|%20s|\n", $txt);

    // gmdate()
    //echo gmdate("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));

    // file_exists()
    // $file = './indexaaaaaaaaaaaa.php';

    // if (file_exists($file)) {
    //     echo "OK file exists";
    //     require_once('index.php');
    // } else {
    //     echo "Theres no such file </br>";
    //     require('OOP_refresher.php');
    // }
    //dirname()

    // $path = './onelevel/secondlevel/OOP_refresher.php';
    // echo dirname($path, 1);
    // echo dirname("/etc/passwd", 1);

    //getcwd()
    //echo "get current working directory: " . getcwd();
    //_DIR_ .
    //require _DIR_ . '/index.php';

    // strpos()
    // $slowo = 'abc';
    // $find = 'a';
    // $position = strpos($slowo, $find);

    // function lookfor()
    // {
    //     global $slowo, $find, $position;

    //     if ($position !== false) {
    //         echo "the string ' " . $find . " ' exists in a string " . $slowo . " and his position is " . $position;
    //     } else {
    //         echo "substring ' " . $find . " ' havent been found in " . $slowo;
    //     }
    // }
    // lookfor();

    // strtolower()

    // $str = "Hello Kitty";
    // $str = 'HELLO MATE';

    // function goLower($x)
    // {

    //     $y = strtolower($x);
    //     echo $y;
    // }
    // goLower($str);

    //str_replace()
    // $vowels = array("a", "e", "o");
    // $replaced = str_replace($vowels, "", "kot bedzie mialczal");
    // echo $replaced;
    // $replaced = str_replace($junk, $healthy, $phrase);


    // function change($phrase, $healthy, $junk)
    // {
    //     if (isset($phrase)) {
    //         echo 'works </br>';
    //         $replaced = str_replace($junk, $healthy, $phrase);
    //         unset($GLOBALS['phrase']);
    //         echo $replaced;
    //     }
    // }

    // $phrase = "eat pizza and drink coca-cola";
    // $healthy = array("fruits", "fresh drinks");
    // $junk = array("pizza", "coca-cola");


    // change($phrase, $healthy, $junk);

    // ob_start() + ob_end_clean()
    // ob_start();
    // $dirty = "eat pizza and drink coca-cola";
    // echo $dirty;
    // ob_end_clean();

    //trim()
    // $exampl = "  just random text  to trim              +++ tak to";
    // $text   = "\t\tThese are a few words :) ...  t t \t";
    // var_dump($text, "\t");

    // $hello  = "Hello World";
    // var_dump($hello, 'HdWr');
    //parse_url();

    // $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
    // echo $url . "</br>";
    // var_dump(parse_url($url));
    // echo "</br>";
    // var_dump(parse_url($url, PHP_URL_QUERY));

    // switch()

    // $i = 3;

    // switch ($i) {
    //     case 0:
    //         echo "i is equal to 0";
    //         break;
    //     case 1:
    //         echo "i is equal to 1";
    //         break;
    //     case 2:
    //         echo "i is equal to 2";
    //         break;
    //     default:
    //         echo 'please choose any number from 0 to 2';
    // }
    // echo "</br>";
    // $i = 'ogorek';

    // switch ($i) {
    //     case 'apple':
    //         echo 'you have chosen apple';
    //     case 'banana':
    //         echo 'you have chosen banana';
    //     case 'carrot':
    //     case 'onion':
    //     case 'horseraddish':
    //         echo 'you have chosen vegetable';
    //     default:
    //         echo 'sorry we dont sell this item';
    // }
    // foreach()

    // $a = array(1, 2, 3, 4);

    // foreach ($a as $val) {
    //     $val = $val * 2;
    //     echo $val . "</br>";
    // }
    // foreach ($a as $key => $value) {
    //     echo "{$key} => {$value}";
    // }
    // foreach ($a as $key => $val) {
    //     $val = $val * 2;
    //     echo "{$key} => {$val} </br>";
    // }

    // $a = array('one' => 1, 'two' => 2, 'three' => 3);

    // foreach ($a as $key => $value) {
    //     echo "{$key} => {$value} </br>";
    // }
    //multidimentional array
    // $y = array();

    // $y[0][0] = 'a';
    // $y[0][1] = 'b';
    // $y[0][2] = 'c';

    // foreach ($y as $v1) {
    //     foreach ($v1 as $v2) {
    //         echo "v2 value: " . $v2 . " </br>";
    //     }
    // }
    // $cars = array(
    //     array('volvo', 'new', 'expensive'),
    //     array('citroen', 'used', 'cheap'),
    //     array('ford', 'used', 'expensive')
    // );

    // foreach ($cars as $a) {
    //     print_r(array_values($a));
    //     echo "</br>";
    // }
    // foreach ($cars as $c) {
    //     echo '_________</br>';
    //     echo "Another car: </br>";
    //     foreach ($c as $i) {
    //         echo $i . "</br>";
    //     }
    // };
    // $food = array(
    //     'fruits' => array('orange', 'banana', 'apple'),
    //     'veggie' => array('carrot', 'collard', 'pea'),
    //     //'meat' => array('pork', 'lamb', 'chicken', 'turkey' => array(['sizes'] => 'big', 'small'))
    //     'meat' => array('pork', 'lamb', 'chicken', 'turkey')

    // );

    // foreach ($food as $key => $name) {
    //     echo '_______' . $key . "______</br>";
    //     foreach ($name as $oo) {
    //         echo $oo . "</br>";

    //         // $sizes = array();
    //         // foreach ($oo["sizes"] as $size) {
    //         //     echo $size;
    //         // }
    //     }
    // }

    // current()

    // $transport = array('one', 'two', 'three', 'four');

    // $mode = current($transport);
    // //echo $mode;
    // $mode2 = next($transport);
    // echo $mode2 . "</br>";
    // $mode3 = current($transport);
    // echo $mode3 . "</br>";
    // $mode4 = next($transport);
    // echo $mode4 . "</br>";
    // $mode5 = current($transport);
    // echo $mode5 . "</br>";
    // $mode6 = prev($transport);
    // echo $mode6;

    // ternary operator
    // $condition = 'abc';

    // $result = $condition ? 'condition is set' : 'condition NOT set';
    // echo $result;

    //null coalescing operator
    // $data = 'my name';
    // $wynik = isset($data) ? 'data set' : 'nobody';
    // echo $wynik;
    // $data = 'User 1';

    // $wynik2 = $data ?? 'nobody';
    // echo $wynik2;
    //chainign coalescing operator
    //$f = 'one';
    //$t = 'two';
    // $th = 'three';

    // $result = $f ?? $t ?? $th ?? 'not value SET';
    // echo $result;

    //preg_replace()

    // $string = 'The quick brown fox jumps over the lazy dog.';

    // $patterns = array();
    // $patterns[0] = '/quick/';
    // $patterns[1] = '/brown/';
    // $patterns[2] = '/fox/';
    // $replacements = array();
    // $replacements[0] = 'slow';
    // $replacements[1] = 'grey';
    // $replacements[2] = 'bear';

    // $result = preg_replace($patterns, $replacements, $string);
    // echo $result;

    //$i = 1;

    // while ($i < 5) {
    //     echo 'the i value is: ' . $i++ . "</br>";
    // }
    // while ($i <= 5) :
    //     echo '<b>the i value is:</b> ' . $i . "</br>";
    //     $i++;
    // endwhile;

    //array_intersec()
    // $array1 = array("a" => "green", "red", "blue");
    // $array2 = array("b" => "green", "yellow", "red");
    // $array1 = array("green", "red", "blue", "pink");
    // $array2 = array("green", "yellow", "red", "pink");

    // $result = array_intersect($array1, $array2);
    // print_r($result);

    //array_keys();
    // $arr1 = array(0 => 100, "color" => "red");
    // $arr1 = array('1' => 'red', '2' => 'pink', '3' => 'green', '4' => 'black');
    // $arr2 = array('one' => 'one', 'two' => 'two', 'three' => 'three');
    //print_r(array_keys($arr1));
    //print_r(array_keys($arr2));
    //print_r(array_keys($arr1, 'pink'));

    // $a = array("color" => array('pink', 'red', 'blue'), "size" => array('small', 'medium', 'big'));
    // print_r($a);

    //stripcslashes()

    // $s = '\ abc';
    //$s2 = '\ abc\def';
    //echo stripcslashes($s2);

    //alternative syntax for control structures
    // $a = '5';
    // if($a === 5): 
    //     echo 'A is equal to 5';
    // else: 
    //     echo "A is not equal to 5";
    // endif

    // $a = 2;

    // if($a == 5):
    //     echo "A is 5";
    // elseif($a == 4):
    //     echo "A is 4";
    // else: 
    //     echo "A is NOT 5 nor 4";
    // endif;

    //for loop
    // for($i = 1 ; $i <=5 ; $i++){
    //     echo $i ." <br>";
    // }
    // for($i = 1; ; $i++){
    //     if($i = 5){
    //         echo "$i is 5 and do Break";
    //     break;
    //     }
    //     echo $i . "</br>";
        
    // }

// isset()
// $t = 'random text';
// if(isset($t)){
//     echo " t value is set and equal to <h2>" . $t . "</h2>";
// }else{
//     echo "t is NOT set";
// }
// $a = NULL;
// var_dump(isset($a));

// $a = array("one"=>'red',"two"=>'green');
// if(isset($a)){
//     //print_r(array_keys($a));
//     if(array_key_exists('one',$a)){
//         //var_dump($a['one']);
//         $b = $a['one'];
//         // echo $b;
//         if($b == 'red'){
//             echo 'Wait for a GREEN LIGHT';
//         }else{
//             echo "Green Light => you can go now";
//         }
//     }
// }

//in_array()
$a = array('one','two','three');
$b = $a[1];

if(in_array($b,$a)){
    echo "value exists in_array";
}else{
    echo "does NOT exists in array";
}

// preg_match()


























    ?>

</body>

</html>