<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Spline+Sans+Mono:wght@600&family=Tajawal&display=swap" rel="stylesheet">
    <title>درجات الاختبارات لطالبات الصف الأول ثانوي</title>
    <style>
        p {
            margin: 5px 0 5px 0;
            font-weight: bold;
        }

        table,
        th,
        td {
            border: 1px solid #e3e3e3;
            border-collapse: collapse;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }

        td,
        th {
            padding: 10px;
        }

        span {
            color: #347474;
        }
    </style>
</head>

<body>
    <h1>نتائج الاختبار لطالبات الصف الأول ثانوي</h1>
    <hr>
    <div class="flex-container">
        <div class="all-certificates-div">
            <h2>تفاصيل الدرجات</h2>
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
            */

            #populate Students names and their tracks into array
            $students_track = array(
                'زينب عبدالمانع' => 'علمي',
                'سارة عبدالله' => 'أدبي',
                'مها خالد' => 'علمي',
                'لانا أحمد' => 'أدبي',
                'ريم وليد' => 'علمي',
                'جمانة محمد' => 'أدبي',
                'نوف علي' => 'أدبي',
                'روان سعد' => 'أدبي',
                'هنادي عادل' => 'علمي',
                'جنى عبدالعزيز' => 'علمي',
            );
            $students = array();
            foreach ($students_track as $name => $track) {

                #populate Students names and their grades into array based on track
                if ($track == 'علمي') {
                    $students_subjects[$name] = array(
                        'رياضيات' => rand(45, 100),
                        'فيزياء' => rand(45, 100),
                        'أحياء' => rand(45, 100),
                        'كيمياء' => rand(45, 100),
                    );
                } else {
                    $students_subjects[$name] = array(
                        'بلاغة' => rand(45, 100),
                        'أدب' => rand(45, 100),
                        'جغرافيا' => rand(45, 100),
                        'تاريخ' => rand(45, 100)
                    );
                }
            ?>

                <div class="certificate-div">
                    <div class="name-div">
                        <p>الاسم: <span><?php echo $name ?></span> </p>
                    </div>
                    <div class="track-div">
                        <p>المسار: <span><?php echo $track ?> </span></p>
                    </div>
                    <div class="table-div">
                        <table>
                            <tr>
                                <th>المادة</th>
                                <th>الدرجة المستحقة</th>
                            </tr>

                            <?php
                            $isPassed = true;
                            $total_grade = 0;
                            $subjects = $students_subjects[$name];
                            foreach ($subjects as $subject => $grade) {

                                if ($grade < 50) {
                                    $isPassed = false;
                                    echo '<tr><td>' . $subject . '</td><td style="color: red;">' .  $grade . '</td></tr>';
                                } else {
                                    echo '<tr><td>' . $subject . '</td><td>' .  $grade . '</td></tr>';
                                }
                                $total_grade += $grade;
                            }
                            ?>

                            <tr>
                                <td>المجموع الكلي</td>
                                <td><span><?php echo $total_grade ?></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="percentage-div">
                        <?php
                        echo '<p>المعدل العام: <span>';
                        $total_percentage = ($total_grade / (count($subjects) * 100)) * 100;
                        echo $total_percentage . ' %</span></p>';
                        ?>
                    </div>

                    <div class="results-div">
                        <?php
                        echo '<p>النتيجة الدراسية: <span>';
                        $result = $isPassed ? 'ناجحة' : 'راسبة';
                        echo $result . '</span></p>';
                        ?>
                    </div>
                </div>
            <?php
                array_push($students, array($name, $track, $total_grade, $total_percentage, $result));
            }
            ?>
        </div>
        <div class="results-table-div">
            <table>
                <tr>
                    <th>الاسم</th>
                    <th>المسار</th>
                    <th>الدرجة المستحقة</th>
                    <th>المعدل العام</th>
                    <th>النتيجة</th>
                </tr>

                <?php
                for ($i = 0; $i < count($students); $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < count($students[0]); $j++) {
                        echo '<td>' . $students[$i][$j] . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>

    <h2>الكود البرمجي لعرض درجات الاختبار لطالبات الصف الأول ثانوي</h2>
    <div class="code" dir="ltr">
        <a target="_blanlk" href="https://github.com/zabdulmanea/taheeltech-webdevelopment/blob/dba28972efd0747b0a1e86afd5874835e021cb29/day%20016%20-%20students%20grades/exams%20results.php">الكود البرمجي لهذه الصفحة</a>
    </div>

    <?php include '../footer.php'; ?>
</body>

</html>