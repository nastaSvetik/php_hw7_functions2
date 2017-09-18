<?php
echo '<pre>';




// Task#1
// Написать функцию, которая возводит число в заданную степень и возвращает его.
// Число передается в функцию первым аргументом,степень - вторым.
// По-умолчанию аргумент степени должен принимать значение 2.
// (Использовать встроенную в язык функцию pow нельзя)
echo '<h3>Task#1 </h3>';

echo power(2,5);


function power($num, $power = 2)
{
    if ($power === 0){$result = 1;}
    elseif ( is_int($power) == true){
        $result = $num;
        for ($i = 1; $i < $power; $i++){
            $result *= $num;
        }
        return $result;
    }
    else return $result = false;

}



// Task#2
// Написать функцию, которая создает массив и заполняет его случайными числами в диапазоне, указанном пользователем.
// Функция должна принимать три аргумента - начало диапазона, его конец и длину требуемого массива.
// После генерации она должна вернуть созданный массив.
echo '<h3>Task#2 </h3>';

$array = array_create(1,5,3);
print_r($array);


function array_create($minvalue, $maxvalue, $length)
{
    $result = array();
    for ($i = 0; $i < $length; $i++){
        $result[$i] = random_int($minvalue,$maxvalue);
    }
    return $result;
}




// Task#3
// Написать функцию, которая будет возвращать сумму элементов целочисленного массива,
// который был передан в нее первым аргуметом.
echo '<h3>Task#3 </h3>';

$summ = array_summ($array);
print_r($summ);


function array_summ($array = array())
{
    $result = 0;
    foreach ($array as $value) {
        $result += $value ;
    }
    return $result;
}




// Task#4
// Сгенерировать десять массивов из случайных чисел.
// Найти среди них один с максимальной суммой элементов и вывести его на экран.
// При решении задачи использовать две функции из двух задач выше.
echo '<h3>Task#4 </h3>';

$a = create_many_arrays_and_find_max_summ_array(10,0,5,9);
echo "MAX_SUMM_ARRAY = ".PHP_EOL;
print_r($a);
echo "ARRAY'S_SUMM = " ;
print_r($max_sum);


function create_many_arrays_and_find_max_summ_array ($arraysnumber, $minvalue, $maxvalue, $length)
{
    global $max_sum;
    $max_sum = 0;
       for ($i = 0; $i <$arraysnumber; $i++ ){
        $$i = array_create($minvalue, $maxvalue, $length);
        if (array_summ($$i) > $max_sum) {
            $max_sum = array_summ($$i); $max_sum_array = $$i;}
    }
return $max_sum_array;
}




// Task#5
// Написать функцию, которая принимает один аргумент по ссылке - строку.
// Функция должна добавить в конец входящей строки строку functioned!.
// Возвращать функция ничего не должна.
echo '<h3>Task#5 </h3>';

$string5 = 'QWERTY string QWERTY ';
functioned_string($string5);
print_r($string5);


function functioned_string (&$string)
{
    $string .= 'functioned!';
}




// Task#6
// Написать функцию, которая принимает один аргумент - натуральное число n.
// Функция должна вывести все числа от 1 до n через пробел.
// Циклы или функцию range использовать нельзя.
echo '<h3>Task#6 </h3>';

$n = 15;
show_numbers_till_1(20);

function show_numbers_till_1($number)
{
    if (is_int($number)===true and $number >= 1){
        show_numbers_till_1($number-1);
        echo ($number)." ";
    }
    else return false;
}