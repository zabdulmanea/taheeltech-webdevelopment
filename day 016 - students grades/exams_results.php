<?php
/*
View high school Students Certificates of the year
and calculate their final grades and result (passed/failed)  

Studend has to get grade > 50 in every subject to pass

GET students info:
    name: string
    track (Science/Literary): string
    Subjects => grades: Associative Array

VIEW each student results:
    total grades: float
    total percentage: float
    isPassed?: boolean

$students_list = array(
    array(
        'name' => '',
        'track'  => '',
        'subjects' => array(
            'math' => 0,
            'physics' => 0,
            'chemistry'=> 0,
            'biology'=> 0
        ),
        'total_grade' => 0,
        'total_percentage'=> 0,
        'isPassed'=> true
    ),
);
*/

#populate Students names and their tracks into array
$students_list = array(
    array(
        'name' => 'زينب عبدالمانع',
        'track'  => 'علمي'
    ),
    array(
        'name' => 'سارة عبدالله',
        'track'  => 'أدبي'
    ),
    array(
        'name' => 'مها خالد',
        'track'  => 'علمي'
    ),
    array(
        'name' => 'لانا أحمد',
        'track'  => 'أدبي'
    ),
    array(
        'name' => 'ريم وليد',
        'track'  => 'أدبي'
    ),
    array(
        'name' => 'جمانة محمد',
        'track'  => 'علمي'
    ),
    array(
        'name' => 'نوف علي',
        'track'  => 'أدبي'
    ),
    array(
        'name' => 'روان سعد',
        'track'  => 'أدبي'
    ),
    array(
        'name' => 'هنادي عادل',
        'track'  => 'علمي'
    ),
    array(
        'name' => 'جنى عبدالعزيز',
        'track'  => 'علمي'
    ),

);

for ($i = 0; $i < count($students_list); $i++) {
    if ($students_list[$i]['track'] == 'علمي') {
        $subjects = array(
            'رياضيات' => rand(45, 100),
            'فيزياء' => rand(45, 100),
            'أحياء' => rand(45, 100),
            'كيمياء' => rand(45, 100),
        );
    } else {
        $subjects = array(
            'بلاغة' => rand(45, 100),
            'أدب' => rand(45, 100),
            'جغرافيا' => rand(45, 100),
            'تاريخ' => rand(45, 100)
        );
    }
    $students_list[$i]['subjects'] = $subjects;
    $students_list[$i]['total_grade'] = array_sum($subjects);
    $students_list[$i]['total_percentage'] = (array_sum($subjects) / (count($subjects) * 100)) * 100;
    $min_grade = min($subjects);
    if ($min_grade < 50) {
        $isPassed = false;
    } else {
        $isPassed = true;
    }
    $students_list[$i]['isPassed'] = $isPassed;
}
// echo '<pre>';
// print_r($students_list);
// echo '</pre>';
