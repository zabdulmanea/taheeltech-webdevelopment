<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include('../head.php'); ?>
    <title>حساب كتلة الجسم والوزن المثالي</title>
</head>

<body>
    <header>
        <h1>حساب كتلة الجسم BMI والوزن المثالي IBW</h1>
    </header>

    <div class="row">
        <div class="bmi-container">

            <div class="form-div">
                <form id="myfrm" name="myfrm" action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="gender">الجنس <span class="asterisks">*</span></label>
                        <input type="radio" id="male" name="gender" value="male" required> ذكر
                        <input type="radio" id="female" name="gender" value="female"> أنثى
                    </div>

                    <div>
                        <label for="height">الطول (cm) <span class="asterisks">*</span></label>
                        <input type="number" step="0.01" id="height" name="height" required>
                    </div>

                    <div>
                        <label for="weight">الوزن الحالي (kg) <span class="asterisks">*</span></label>
                        <input type="number" id="weight" step="0.01" name="weight" required>
                    </div>

                    <div class="buttons-div smaller-btns-div">
                        <button type="submit" class="submit-btn" id="submit" name="submit">حساب</button>
                        <button type="reset" class="reset-btn" id="reset" name="reset">إعادة تعيين</button>
                    </div>
                </form>
            </div>

            <div class="result-div">
                <h3>النتائج</h3>

                <?php
                require 'bmi_calculator.php';
                require 'ibw_calculator.php';
                $height = $_POST['height'] ?? '';
                $weight = $_POST['weight'] ?? '';
                $gender = $_POST['gender'] ?? '';
                if (!empty($height) && !empty($weight) && !empty($gender)) {
                    $ibw = round(Caluclate_ibw($gender, $height), 2);
                    $bmi = round(Caluclate_bmi($height, $weight)[0], 2);
                    $weight_status = Caluclate_bmi($height, $weight)[1];

                    echo '<p>طولك : <label>' . $height . ' سم</label></p>';
                    echo '<p>وزنك الحالي : <label>' . $weight . ' كجم</label></p>';
                    echo '<p>وزنك المثالي <label>' . $ibw . ' كجم</label></p>';
                    echo '<p>كتلة جسمك : <label>' . $bmi . '</label></p>';
                    echo '<p>لديك <label>' . $weight_status . '</label></p>';
                }
                ?>
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