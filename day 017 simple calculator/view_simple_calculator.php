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

    <style>
        input {
            width: 10px;
        }

        .no-div {
            text-align: right;
            margin: 20px;
        }

        .no-div input {
            width: 50px;
            height: 30px;
        }

        .btn {

            border: none;
            background: #d1a7c2;
            background-image: linear-gradient(to bottom, #d1a7c2, #c295bd);
            border-radius: 28px;
            font-family: monospace, 'Courier New', Courier;
            color: #ffffff;
            font-size: 14px;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
        }

        .btn:hover {
            background: #e3b8d2;
            background-image: linear-gradient(to bottom, #e3b8d2, #d1afc4);
            text-decoration: none;
        }

        .calculator {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #f7f0ee;
            border-radius: 10px;
        }

        .result {
            /* text-align: right; */
            margin: 20px;
        }

        .result-p {
            color: green;
        }
    </style>

</head>

<body>
    <h1>آلة حاسبة مُبسطة Simple Calculator</h1>
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
            <h3>الناتج</h3>
            <p class="result-p">
                <?php echo SimpleCalculator($_POST['no1'] ?? '', $_POST['no2'] ?? '', $_POST['operation'] ?? ''); ?>
            </p>

        </div>
    </div>
    <h2>الكود البرمجي للآلة الحاسبة المبسطة</h2>
    <div class="code" dir="ltr">
        <?php
        $code = file_get_contents('https://raw.githubusercontent.com/zabdulmanea/taheeltech-webdevelopment/dba28972efd0747b0a1e86afd5874835e021cb29/index.php');
        // $code = str_replace('$','\$',$code);
        // $code = str_replace('"','\"',$code);
        // highlight_string($code);  
        // highlight_string('<html>');
        ?>
    </div>

</body>

</html>