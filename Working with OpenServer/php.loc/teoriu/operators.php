<!DOCTYPE html>
<meta charset="utf-8">

<?php

/*
 * 1. Арифметические операторы
 * 2, Оператры присаивания
 * 3. Операторы сравнения
 * 4. Операторы инкремента и дикремента
 * 5. Логические операторы
 * 6. Строковые операторы
 * 7. Операторы массивов
 * - Приоретет оператора
 * 
 * А также
 * 
 * 8. Побитовые операторы
 * 9. Оператор управления ошибками
 * 10. Оператор исполнения
 * 11. Оператор проверки типа
 */

//1. Арифметические операторы (+,-,/,*,%,**)
#echo 13 % 4;
//2. Операторы присваивания (=,+=,-=,/=,*=,%=)
$i = 16;
$i += 10;
#echo $i;
//3. Операторы сравнения (<,>,<=,>=,==,===,!=,<>,!==)
if($i != '6' )
{
    //echo 'true';
}   
else {
    //echo 'false';
}
//4. Операторы инкремента и дикремента ($i++, ++$i, $i--, --$i)
//echo ++$i.'<br>';

//echo $i;
//5. Логические операторы (!, and, or, xor, &&, || )
$a = true;
$b = false;
$c = true;
if($a || $b || $c)
{
    //echo 'true';
}   
else {
    //echo 'false';
}
//6. Строковые операторы(. , .=)
$string = 'Привет'.'<br>';
$string .= ', Влад!';
//echo $string;
//7. Операторы массивов(+, ==, !=, <>, ===, !==)
/*
$array_1 = array(
    'id' => 'Значение 1',
    'title' => 'Значение 2'
    );
$array_2 = array(
    'id' => 'Значение 1',
    'title' => 'Значение 2',
    );

echo '<pre>';
if($array_1 == $array_2)
{
    echo '1';
}
 else {
    echo '0';
}
echo '</pre>';
 * 
 */
//- Приоретет оператора
echo 2 + 2 * 5;
$i = ($string = $i);


