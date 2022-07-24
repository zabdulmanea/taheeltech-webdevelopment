<?php
/*
    BMI Calculator
    BMI needs Weight & Height
    Weight => kg
    Height => m
    BMI = Weight / (Height*Height)
    */

### ALGORITHM ###
/*
    Get Weight
    Get Height
    Caluclate BMI based on: BMI = Weight / (Height*Height) 
    Based on BMI decide if:
        BMI < 15 then user has 'نقص حاد جدًا في الوزن'
        BMI >= 15 and < 16 then user has 'نقص حاد في الوزن'
        BMI >= 16 and < 18.5 then user has 'نقص في الوزن'
        BMI >=18.5 and < 25 then user has 'وزن طبيعي'
        BMI >= 25 and < 30 then user has 'زيادة في الوزن'
        BMI >= 30 and < 35 then user has 'سمنة درجة أولى'
        BMI >= 35 and < 40 then user has 'سمنة درجة ثانية'
        BMI >= 40 then user has 'سمنة مفرطة جدًا'
    */


// $height = 190;
// $weight = 90;

$height = $_POST['height'] ?? 1;
$weight = $_POST['weight'] ?? 0;

$bmi = $weight / pow(($height / 100), 2);
$weight_status = '';

if ($bmi < 15) {
    $weight_status = 'نقص حاد جدًا في الوزن';
} elseif ($bmi >= 15 && $bmi < 16) {
    $weight_status = 'نقص حاد في الوزن';
} elseif ($bmi >= 16 && $bmi < 18.5) {
    $weight_status = 'نقص في الوزن';
} elseif ($bmi >= 18.5 && $bmi < 25) {
    $weight_status = 'وزن طبيعي';
} elseif ($bmi >= 25 && $bmi < 30) {
    $weight_status = 'زيادة في الوزن';
} elseif ($bmi >= 30 && $bmi < 35) {
    $weight_status = 'سمنة درجة أولى';
} elseif ($bmi >= 35 && $bmi < 40) {
    $weight_status = 'سمنة درجة ثانية';
} else {
    $weight_status = 'سمنة مفرطة جدًا';
}
