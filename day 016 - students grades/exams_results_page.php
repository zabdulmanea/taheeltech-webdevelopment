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

    <?php require('exams_results.php'); ?>

    <style>
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
    </style>
</head>

<body>
    <header>
        <h1>نتائج الاختبار لطالبات الصف الأول ثانوي</h1>
    </header>
    <div class="row">
        <div class="flex-container">

            <div class="results-table-div">
                <table>
                    <tr>
                        <th>الاسم</th>
                        <th>المسار</th>
                        <th>الدرجة المستحقة<br> (من 400)</th>
                        <th>المعدل العام</th>
                        <th>النتيجة</th>
                    </tr>

                    <?php

                    foreach ($students_list as $student) {
                        echo '<tr>';
                        echo '<td>' . $student['name'] . '</td>';
                        echo '<td>' . $student['track'] . '</td>';
                        echo '<td>' . $student['total_grade'] . '</td>';
                        echo '<td>' . $student['total_percentage'] . '</td>';
                        echo '<td>' . ($student['isPassed'] ? 'ناجحة' : 'راسبة') . '</td>';
                        echo '</tr>';
                    }
                    ?>

                </table>

            </div>

            <hr>
            <h2>درجات الطالبات بالتفصيل</h2>
            <div class="all-certificates-div">
                <?php
                foreach ($students_list as $student) {
                ?>
                    <div class="certificate-div">
                        <div class="name-div">
                            <p>الاسم: <span><?php echo $student['name'] ?></span> </p>
                        </div>
                        <div class="track-div">
                            <p>المسار: <span><?php echo $student['track'] ?> </span></p>
                        </div>
                        <div class="table-div">
                            <table>
                                <tr>
                                    <th>المادة</th>
                                    <th>الدرجة المستحقة</th>
                                </tr>

                                <?php
                                /** @var array $student */
                                foreach ($student['subjects'] as $subject => $grade) {
                                    if ($grade < 50) {
                                        echo '<tr><td>' . $subject . '</td><td style="color: red;">' .  $grade . '</td></tr>';
                                    } else {
                                        echo '<tr><td>' . $subject . '</td><td>' .  $grade . '</td></tr>';
                                    }
                                }
                                ?>
                                <tr>
                                    <td>المجموع الكلي</td>
                                    <td><span><?php echo $student['total_grade'] ?></span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="percentage-div">
                            <?php
                            echo '<p>المعدل العام: <span>';
                            echo $student['total_percentage'] . ' %</span></p>';
                            ?>
                        </div>
                        <div class="results-div">
                            <?php
                            echo '<p>النتيجة الدراسية: <span>';
                            $result = $student['isPassed'] ? 'ناجحة' : 'راسبة';
                            echo $result . '</span></p>';
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <hr>
        <h2>الكود البرمجي لعرض درجات الاختبار لطالبات الصف الأول ثانوي</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('exams_results.php') . '?>') ?>
        </div>

    </div>

    <?php include '../footer.php'; ?>
</body>


</html>