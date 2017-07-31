<?php
echo "Задание 1", "<br />", "<br />";
$arr = ["One", "Two", "Three", "Four", "Five"];

function task1 ($array)
{
    foreach ($array as $arr) {
        echo "<p>" . $arr . "</p>";
    }
}
task1($arr);
echo "<br>";
$param = true;
if ($param) {
    function task2 () {
        $arr = ["One", "Two", "Three", "Four", "Five"];
        $unification = implode(",", $arr);
        echo "$unification";
        return $arr;


    }

}
echo task2();
echo "<br />", "<br />";

echo "Задание 2", "<br />", "<br />";
function task3 ($array, $line) {
    $outcome= " ";
    foreach ($array as $term) {
        $outcome .= $term . $line;
    }
    $outcome = substr($outcome, 1, 7);
    $result = eval("return($outcome);");
    echo "Решение: " . $outcome . " = " . $result;
}
$term = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$operator = "*";
task3($term, $operator);
echo "<br />", "<br />";

echo "Задание 3", "<br />", "<br />";

function task4()
{
    $list = func_get_args ();
    $selection = array_shift ($list);
    $outcome = " ";
    foreach ($list as $term) {
        $outcome .= $term . $selection;
    }
    $outcome = substr($outcome, 1, -1);
    $result = eval("return($outcome);");
    echo "Результат:    " . $outcome . " = " . $result;
}
$selection = "+";
$arg1 = 1;
$arg2 = 2;
$arg3 = 3;
$arg4 = 5.2;
task4 ($selection, $arg1, $arg2, $arg3, $arg4);
echo "<br />", "<br />";

echo "Задание 4", "<br />", "<br />";

function task5 ($column, $line) {
    if (is_int($column) && is_int($line)) {
        echo "<table><tr>";
        for ($i = 1; $i <= $column; $i++) {
            for ($j = 1; $j <= $line; $j++) {
                echo "<td>";
                if ($i % 2 == 0 && $j % 2 == 0)
                    echo "" . $j * $i . "";
                elseif ($i % 2 == 1 && $j % 2 == 1)
                    echo "" . $j * $i . "";
                else echo($j * $i);
                echo "</td>";
            }
            echo "</tr>";
        }
    }
}
task5 (3, 3);
echo "</table>";
echo "<br />", "<br />";

echo "Задание 5", "<br />", "<br />";

$palindrom = "999";
function task6 ($palindrom) {
    $lenght = strlen ($palindrom) - 1;
    $i = $lenght;
    while ($i >= 0) {
        $new[] = $palindrom[$i];
        $i--;
    }
    $result = implode(" ", $new);
    if ($palindrom === $result) {
        return true;
    } else {
        return false;
    } 
}
if (task6 ($palindrom)){
    echo 'Это палиндром!';
}
else {
    echo 'Не является палиндромом';
}
echo "<br />", "<br />";

echo "Задание 6", "<br />", "<br />";

echo "Текущая дата: " . date ("d.m.Y H:i", time ()) . "<br>";
echo "Текущая дата в unix: " . time () . "<br>";
echo "<br />", "<br />";

echo "Задание 7", "<br />", "<br />";
$search = "Две";
$replace = "Три";
$subject = "Две бутылки лимонада";
echo str_replace($search, $replace, $subject) . "<br>";

$search = "К";
$replace = " ";
$subject = "Карл у Клары украл Кораллы";
echo str_replace($search, $replace, $subject);
echo "<br />", "<br />";

echo "Задание 9", "<br />", "<br />";
$open = fopen("test.txt", "r");
echo nl2br('$open', "500");
fclose($open);
echo "<br />", "<br />";

echo "Задание 10", "<br />", "<br />";
$text = "Hello again!";
if (!file_exists("anothertest.txt")) {
    $fp = fopen("anothertest.txt", "w+");
    fwrite("$fp", "$text");
    fclose("$fp");
}



