<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Spline+Sans+Mono:wght@600&family=Tajawal&display=swap" rel="stylesheet">
    <title> التدريبات العملية للمستوى الأولى</title>

    <?php require('exercises_info.php'); ?>
</head>

<body>

    <header>
        <h1>التطبيق العملي لتدريبات المستوى الأول</h1>
        <div style="width: 100%; height: 8px; border-bottom: 1px solid black; text-align: center; margin-bottom: 50px;">
            <span style="font-size: 15px; background-color: #fcf8f3; padding: 0 10px;">
                زينب عبدالمانع
            </span>
        </div>
    </header>

    <div class="row">
        <?php
        foreach ($exercises_info as $exercise_info) {
            $info = '
        <div class="exercise_div col-1 col-s-1">
            <h2 class="ex_no">' . $exercise_info['title'] . '</h2>
            <a class="ex_link" target="_blank" href="' . $exercise_info['link'] . '" alt="' . $exercise_info['alt'] . '">' . $exercise_info['subtitle'] . '</a>
        </div>
        ';
            echo $info;
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>