<?php

$num1 = isset($_POST['num1']) ? $_POST['num1'] : "";
$num2 = isset($_POST['num2']) ? $_POST['num2'] : "";
echo $num1 + $num2;
?>