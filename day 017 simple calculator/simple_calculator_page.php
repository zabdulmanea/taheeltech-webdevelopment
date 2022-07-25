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
    <title>آلة حاسبة مُبسطة Simple Calculator</title>

    <?php require('simple_calculator.php'); ?>

</head>

<body>
    <header>
        <h1>آلة حاسبة مُبسطة Simple Calculator</h1>
    </header>
    <div class="row">
        <hr>
        <div class="calculator">
            <form method="POST" action="" name="calform" id="calform">
                <div class="no-div">
                    <label for="no1">الرقم الأول</label>
                    <input type="number" step="0.1" name="no1" id="no1" value="<?php echo $_POST['no1'] ?>" required>
                </div>

                <div class="no-div">
                    <label for="no2">الرقم الثاني</label>
                    <input type="number" step="0.1" name="no2" id="no2" value="<?php echo $_POST['no2'] ?>" required>
                </div>

                <div class="operations">
                    <button class="btn" type="submit" name="operation" value="sum" id="sum">+</button>
                    <button class="btn" type="submit" name="operation" value="sub" id="sub">-</button>
                    <button class="btn" type="submit" name="operation" value="multiplaction" id="multiplaction">×</button>
                    <button class="btn" type="submit" name="operation" value="division" id="division">÷</button>
                    <button class="btn" type="submit" name="operation" value="reminder" id="reminder">%</button>
                </div>
            </form>

            <div class="result">
                <h3 class="result-p">
                    <?php echo SimpleCalculator($_POST['no1'] ?? '', $_POST['no2'] ?? '', $_POST['operation'] ?? ''); ?>
                </h3>
            </div>
        </div>

        <hr>
        <h2>الكود البرمجي للآلة الحاسبة المبسطة</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('simple_calculator.php') . '?>') ?>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>