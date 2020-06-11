<?php
    /*
    *Este es el primer archivo cargado por el servidor web
    */

    //imprimamos un mensaje PHP
    echo 'Hola mundo';

    echo 'Bienvenidos al curso de Programacion Web II';

    //y luego incluir el resto del codigo HTML
    require 'index.html';

    $_some_value='abc'; // válido
    //$1 número=12.3; // ¡no es válido!
    //$some$signs%='& ^%'; // ¡no es válido!
    $go_2_home="ok"; // válido
    $go_2_Home='no'; // esta es una variable diferente
    $isThisCamelCase=true; // notación camello

    echo "<br />";

    $number = 123;
    var_dump($number);
    $number = 'abc';
    var_dump($number);

    echo "<br />";

    $a = "1";
    $b = 2;
    var_dump($a + $b); // 3
    var_dump($a . $b); // 12

    echo "<br />operadores aritméticos <br />";
    $a = 10;
    $b = 3;
    var_dump($a + $b); // 13
    var_dump($a - $b); // 7
    var_dump($a * $b); // 30
    var_dump($a / $b); // 3.333333...
    var_dump($a % $b); // 1
    var_dump($a ** $b); // 1000
    echo "<br />";
    echo (10 % 3)."<br />";           // muestra 1
    echo (10 % -3)."<br />";          // muestra 1
    echo (-10 % 3)."<br />";          // muestra -1
    echo (-10 % -3)."<br />";         // muestra -1
    echo "<br />operadores de asignación <br />";
    $a = 13;
    $a += 14; // igual que $a = $a + 14;
    var_dump($a);
    $a -= 2; // igual que $a = $a - 2;
    var_dump($a);
    $a *= 4; // igual que $a = $a * 4;
    var_dump($a);
    echo "<br />operadores de comparación <br />";
    var_dump(2 < 3); // true
    var_dump(3 < 3); // false
    var_dump(3 <= 3); // true
    var_dump(4 <= 3); // false
    var_dump(2 > 3); // false
    var_dump(3 >= 3); // true
    var_dump(3 > 3); // false
    var_dump(1 <=> 2); // int menor que 0
    var_dump(1 <=> 1); // 0
    var_dump(3 <=> 2); // int mayor que 0
    echo "<br /> evaluando igualdad <br />";
    $a = 3;
    $b = '3';
    $c = 5;
    var_dump($a == $b); // true
    var_dump($a === $b); // false
    var_dump($a != $b); // false
    var_dump($a !== $b); // true
    var_dump($a == $c); // false
    var_dump($a <> $c); // true
    echo "<br /> operadores lógicos <br />";
    var_dump(true && true); // true
    var_dump(true && false); // false
    var_dump(true || false); // true
    var_dump(false || false); // false
    var_dump(!false); // true
    echo "<br /> operadores crecientes y decrecientes <br />";
    $a = 3;
    $b = $a++; // $b es 3, $a es 4
    var_dump($a, $b);
    $b = ++$a; // $a y $b son 5
    var_dump($a, $b);
    echo "<br /> precedencia de operadores<br />";
    $a = 3 * 3 % 5; // (3 * 3) % 5 = 4
    echo 'a =' . $a;
    // la asociatividad del operador ternario difiere de C/C++
    $a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
    echo ', a = '. $a;
    $a = 1;
    echo ', a =' . $a;
    $b = 2;
    echo ', b =' . $b;
    $a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
    echo ', a =' . $a .' y b =' . $b."<br />";
    echo "<br /> cadenas<br />";
    $text = '   ¡Bienvenido a diseño web 2 en URACCAN!  ';

    echo strlen($text); // 45
    $text = trim($text);
    echo $text; // ¡Bienvenido a diseño web 2 en URACCAN! 
    echo strtoupper($text); // ¡BIENVENIDO A DISEñO WEB 2 EN URACCAN!
    echo strtolower($text); // �bienvenido a dise�o web 2 en uraccan!
    $text = str_replace('do', 'da', $text);
    echo $text; // ¡Bienvenida a diseño web 2 en URACCAN!
    echo substr($text, 2, 6); // Bienve
    var_dump(strpos($text, 'do')); // false
    var_dump(strpos($text, 'da')); // 10

    if(strpos($text,'web')){
        $text = str_replace('programacion','diseño', $text);
        echo strlen($text);
    } else {
        $text = str_replace('diseño','programacion', $text);
        echo strlen($text);    
    }
    
    echo "<br /> Arreglos<br />";
    $empty1 = [];
    $empty2 = array();
    $names1 = ['Harry', 'Ron', 'Hermione'];
    $names2 = array('Harry', 'Ron', 'Hermione');
    $status1 = [
        'name' => 'James Potter',
        'status' => 'dead'
    ];
    $status2 = array(
        'name' => 'James Potter',
        'status' => 'dead'
    );
    print_r($names1);

    $names = ['Harry', 'Ron', 'Hermione'];
    $status = [
        'name' => 'James Potter',
        'status' => 'dead'
    ];
    $names[] = 'Neville';
    $status['age'] = 32;
    print_r($names);
    print_r($status);
    echo "<br />";
    $names['badguy'] = 'Voldemort';
    $names[8] = 'Snape';
    $names[] = 'McGonagall';
    print_r($names);
    print_r($names[1]); // imprime 'Ron'

    $string = '';
    $array = [];
    $names = ['Harry', 'Ron', 'Hermione'];
    var_dump(empty($string)); // true
    var_dump(empty($array)); // true
    var_dump(empty($names)); // false
    var_dump(isset($names[2])); // true
    var_dump(isset($names[3])); // false

    $names = ['Harry', 'Ron', 'Hermione'];
    $containsHermione = in_array('Hermione', $names);
    var_dump($containsHermione); // true
    $containsSnape = in_array('Snape', $names);
    var_dump($containsSnape); // false
    $wheresRon = array_search('Ron', $names);
    var_dump($wheresRon); // 1
    $wheresVoldemort = array_search('Voldemort', $names);
    var_dump($wheresVoldemort); // false

    $properties = [
        'firstname' => 'Tom',
        'surname' => 'Riddle',
        'house' => 'Slytherin'
    ];
    $keys = array_keys($properties);
    var_dump($keys);
    $values = array_values($properties);
    var_dump($values);

    echo "antes de la condicional.";
    if (4 > 3) {
        echo "dentro de la condicional.";
    } else {
        echo "en el else.";
    }
    if (3 > 4) {
        echo "esto no se imprimirá.";
    }
    echo "después de la condicional.";


    $title = 'Twilight';
    switch ($title) {
        case 'Harry Potter':
            echo "Bonita historia, un poco demasiado larga.";
        case 'Twilight':
            echo ':v...';
        case 'El señor de los anillos':
            echo "Un clasico";
        default:
            echo "no es ese.";
    }

    $i = 1;
    while ($i < 4) {
        echo $i . " ";
        $i++;
    }

    echo "con while: ";
    $i = 1;
    while ($i < 0) {
        echo $i . " ";
        $i++;
    }
    echo "con do-while: ";
    $i = 1;
    do {
        echo $i . " ";
        $i++;
    } while ($i < 0);


    $names = ['Harry', 'Ron', 'Hermione'];
    for ($i = 0; $i < count($names); $i++) {
        echo $names[$i] . " ";
    }


    for ($i = 1; $i < 10; $i++) {
        echo $i . " ";
    }

    $names = ['Harry', 'Ron', 'Hermione'];
    foreach ($names as $name) {
        echo $name . " ";
    }
    foreach ($names as $key => $name) {
        echo $key . " -> " . $name . " ";
    }  

    //funciones
    function addNumbers($a, $b) {
        $suma = $a + $b;
        return $suma;
    }
    $resultado = addNumbers(2,3);

    //argumentos opcionales
    function sumar($a, $b, $imprimir=false) {
        if($imprimir)
        {
            $suma = $a + $b;
            return $suma;
        }
    }
    $resultado = sumar(2,3);
    $resultado = sumar(2,3,true);

    //argumentos por referencia
    function cambiar($a)
    {
        $a = 3;
    }
    $a=2;
    cambiar($a);
    var_dump($a);//imprime 2
?>