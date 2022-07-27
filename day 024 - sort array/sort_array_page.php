<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include('../head.php'); ?>
    <title>ترتيب مصفوفة</title>

    <?php
    require('sort_array.php');
    require('../day 016 - students grades/exams_results.php');
    ?>

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
        <h1>ترتيب مصفوفة تصاعدياً/تنازليًا</h1>
    </header>
    <div class="row">
        <div class="sort-array-container">
            <div class="sort-options">
                <form method="POST" action="" name="calform" id="calform">
                    <button class="btn" type="submit" name="sort" value="sortbyname_asc" id="sortbyname_asc">ترتيب تصاعدي حسب الاسم</button>
                    <button class="btn" type="submit" name="sort" value="sortbypercentage_asc" id="sortbypercentage_asc">ترتيب تصاعدي حسب المعدل</button>
                    <button class="btn" type="submit" name="sort" value="sortbyname_desc" id="sortbyname_desc">ترتيب تنازلي حسب الاسم</button>
                    <button class="btn" type="submit" name="sort" value="sortbypercentage_desc" id="sortbypercentage_desc">ترتيب تنازلي حسب المعدل</button>
                </form>

            </div>
            <div class="results-table-div">
                <table>
                    <tr>
                        <th style="background-color: #4f6d73;">الاسم</th>
                        <th style="background-color: #4f6d73;">المعدل العام</th>
                    </tr>
                    <?php

                    if (isset($_POST['sort'])) {
                        if ($_POST['sort'] == 'sortbyname_asc') {
                            $students_list = ascending_sort($students_list, 'name');
                        } elseif ($_POST['sort'] == 'sortbypercentage_asc') {
                            $students_list = ascending_sort($students_list, 'percentage');
                        } elseif ($_POST['sort'] == 'sortbyname_desc') {
                            $students_list = descending_sort($students_list, 'name');
                        } elseif ($_POST['sort'] == 'sortbypercentage_desc') {
                            $students_list = descending_sort($students_list, 'percentage');
                        } else {
                            echo '<p class="error-msg">Sorry, there\'s an error</p>';
                        }
                    }

                    foreach ($students_list as $student) {
                        echo '<tr>';
                        echo '<td>' . $student['name'] . '</td>';
                        echo '<td>%' . $student['total_percentage'] . '</td>';
                        echo '</tr>';
                    }

                    ?>
                </table>
            </div>
        </div>

        <hr>
        <h2>الكود البرمجي لدالة ترتيب المصفوفات تصاعديًا</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('sort_array.php') . '?>') ?>
        </div>

    </div>

    <?php include '../footer.php'; ?>
</body>


</html>