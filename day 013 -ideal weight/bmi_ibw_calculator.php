<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Spline+Sans+Mono:wght@600&family=Tajawal&display=swap" rel="stylesheet">

    <title>حساب كتلة الجسم والوزن المثالي</title>
</head>

<body>
    <header>
        <h1>حساب كتلة الجسم BMI والوزن المثالي IBW</h1>
    </header>

    <div class="row">
        <?php
        require 'bmi_calculator.php';
        require 'ibw_calculator.php';
        ?>
        <div class="container">

            <div class="form-div">
                <form id="myfrm" name="myfrm" action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="gender">الجنس <span class="asterisks">*</span></label>
                        <input type="radio" id="male" name="gender" value="male" required> ذكر
                        <input type="radio" id="female" name="gender" value="female"> أنثى
                    </div>

                    <div>
                        <label for="height">الطول (cm) <span class="asterisks">*</span></label>
                        <input type="number" step="0.01" id="height" name="height" value="<?php echo $height ?>" required>
                    </div>

                    <div>
                        <label for="weight">الوزن الحالي (kg) <span class="asterisks">*</span></label>
                        <input type="number" id="weight" step="0.01" name="weight" value="<?php echo $weight ?>" required>
                    </div>

                    <div class="buttons-div smaller-btns-div">
                        <button type="submit" class="submit-btn" id="submit" name="submit">حساب</button>
                        <button type="reset" class="reset-btn" id="reset" name="reset">إعادة تعيين</button>
                    </div>
                </form>
            </div>

            <div class="result-div">
                <h3>النتائج</h3>
                <p>
                    كتلة جسمك تساوي
                    <label><?php echo round($bmi, 2); ?></label>

                </p>
                <p>
                    لديك
                    <label><?php echo $weight_status; ?></label>
                </p>
                <p>
                    وزنك المثالي
                    <label><?php echo round($ibw, 2); ?></label>
                </p>
            </div>
        </div>

        <hr>

        <h2>الكود البرمجي لحساب كتلة الجسم</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('bmi_calculator.php') . '?>'); ?>
        </div>

        <hr>

        <h2>الكود البرمجي لحساب الوزن المثالي</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('ibw_calculator.php') . '?>'); ?>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>