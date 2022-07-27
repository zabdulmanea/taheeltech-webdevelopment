<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include('../head.php'); ?>

    <title>عكس متغير نصي</title>
</head>

<body>
    <header>
        <h1>عكس متغير نصي</h1>
    </header>
    <div class="row">
        <div class="simple-form-container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="textarea-text-div">
                    <label for="text">أدخل النص: </label>
                    <textarea class="textarea-text" id="text" name="text" rows="10" required></textarea>
                </div>

                <div class="buttons-div smaller-btns-div">
                    <button type="submit" class="submit-btn" id="submit" name="submit">اعكس النص</button>
                </div>
            </form>

            <div class="result txt-result">
                <?php
                require('reverse_text.php');
                if (isset($_POST["text"]) && !empty($_POST["text"])) {
                    echo '<h3>النص الأصلي </h3>' . $_POST["text"];
                    // echo '<h3>النص معكوس (حرف حرف)</h3>' . revstr_char($_POST["text"]);
                    echo '<h3>النص معكوس (كلمة كلمة)</h3>' . revstr_word($_POST["text"]);
                }
                ?>
            </div>
        </div>
        <hr>
        <h2>الكود البرمجي لرفع ملف (صورة) من نموذج</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('reverse_text.php') . '?>') ?>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>