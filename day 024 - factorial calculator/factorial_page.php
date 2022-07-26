<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include('../head.php'); ?>
    <title>حساب مضروب العدد</title>

    <?php require('factorial.php'); ?>

</head>

<body>
    <header>
        <h1>حساب مضروب العدد Factorial of positive a number</h1>
    </header>
    <div class="row">
        <hr>
        <div class="calculator">
            <form method="POST" action="" name="calform" id="calform">
                <div class="no-div">
                    <label for="num">أدخل الرقم </label>
                    <input type="number" step="1" min="0" name="num" id="num" value="<?php echo $_POST['num'] ?>" required>
                </div>

                <div class="operations">
                    <button class="btn" type="submit" name="operation" value="factorial" id="factorial">احسب مضروب العدد</button>
                </div>
            </form>

            <div class="result">
                <h3 class="result-p">
                    <?php echo Factorial($_POST['num'] ?? ''); ?>
                </h3>
            </div>
        </div>

        <hr>
        <h2>الكود البرمجي لحساب مضروب العدد Factorial</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('factorial.php') . '?>') ?>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>