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
    <h1>حساب كتلة الجسم BMI والوزن المثالي IBW</h1>
    <hr>

    <?php

    require '../day 013 -ideal weight/bmi_calculator.php';
    require '../day 013 -ideal weight/ibw_calculator.php';
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

                <div class="buttons">
                    <button type="submit" class="submit" id="submit" name="submit">حساب</button>
                    <button type="reset" class="reset" id="reset" name="reset">إعادة تعيين</button>
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
        <?php
        highlight_string("
<?php 
\$height = \$_POST['height'] ?? 1;
\$weight = \$_POST['weight'] ?? 1;

\$bmi = \$weight / pow((\$height/100), 2);
\$weight_status = '';

if (\$bmi < 15) {
    \$weight_status = 'نقص حاد جدًا في الوزن';
} elseif (\$bmi >= 15 && \$bmi < 16) {
    \$weight_status = 'نقص حاد في الوزن';
} elseif (\$bmi >= 16 && \$bmi < 18.5) {
    \$weight_status = 'نقص في الوزن';
} elseif (\$bmi >= 18.5 && \$bmi < 25) {
    \$weight_status = 'وزن طبيعي';
} elseif (\$bmi >= 25 && \$bmi < 30) {
    \$weight_status = 'زيادة في الوزن';
} elseif (\$bmi >= 30 && \$bmi < 35) {
    \$weight_status = 'سمنة درجة أولى';
} elseif (\$bmi >= 35 && \$bmi < 40) {
    \$weight_status = 'سمنة درجة ثانية';
} else {
    \$weight_status = 'سمنة مفرطة جدًا';
}
?>");
        ?>
    </div>

    <hr>

    <h2>الكود البرمجي لحساب الوزن المثالي</h2>
    <div class="code" dir="ltr">
        <?php
        highlight_string("
<?php 
\$gender = \$_POST['gender'] ?? '';
\$height = \$_POST['height'] ?? 1;
\$ibw;

switch (\$gender) {
    case 'female':
        \$ibw = 45.5 + (0.91 * (\$height - 152.4));
        break;
    case 'male':
        \$ibw = 50 + (0.91 * (\$height - 152.4));
        break;
    default:
        \$ibw = 0;
}
?>");
        ?>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>