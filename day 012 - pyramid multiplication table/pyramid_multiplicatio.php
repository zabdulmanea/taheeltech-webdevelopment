<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Spline+Sans+Mono:wght@600&family=Tajawal&display=swap" rel="stylesheet">
    <title>جدول الضرب </title>
</head>

<body>
    <h1>تطبيق لرسم جدول الضرب</h1>
    <hr>
    <?php
    $max_num = $_POST['max_num'] ?? '';
    ?>

    <form name="form" action="" method="post" dir="rtl">
        <div class="max_num">
            <label for="max_num">إنشاء جدول ضرب يبدأ من 1 إلى </label>
            <input class="max-num-input" type="number" name="max_num" min="1" step="1" id="max_num" value="<?php echo $max_num ?>">
        </div>
    </form>

    <hr>
    <table>
        <colgroup>
            <?php
            $col_counter = 1;
            while ($col_counter <= $max_num) {
                if ($col_counter % 2 == 0) {
                    echo '<col style="background-color:#ffaaa5">';
                } else {
                    echo '<col style="background-color:#ffd3b6">';
                }
                $col_counter++;
            }
            ?>
        </colgroup>
        <?php

        for ($row = 1; $row <= $max_num; $row++) {
            echo '<tr>';
            for ($ncol = 1; $ncol <= $row; $ncol++) {
                echo '<td><div class="cell">' . $ncol . 'x' . $row .
                    '<br>=<br><b>' . $ncol * $row . '</b></div></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    <hr>
    <h2>الكود البرمجي لبناء جدول الضرب </h2>
    <div class="code">
        <?php
        highlight_string("
 
<table>
    <colgroup>
        <?php
        \$col_counter = 1;
        while (\$col_counter <= \$max_num) {
            if (\$col_counter % 2 == 0) {
                echo '<col style=\"background-color:#ffaaa5\">';
            } else {
                echo '<col style=\"background-color:#ffd3b6\">';
            }
            \$col_counter++;
        }
        ?>
    </colgroup>
    <?php
    for (\$row = 1; \$row <= \$max_num; \$row++) {
        echo '<tr>';
        for (\$ncol = 1; \$ncol <= \$row; \$ncol++) {
            echo '<td><div class=\"cell\">' . \$ncol . 'x' . \$row .
                '<br>=<br><b>' . \$ncol * \$row . '</b></div></td>';
        }
        echo '</tr>';
    }
    ?>
</table>
");
        ?>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>