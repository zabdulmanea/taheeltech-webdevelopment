<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include('../head.php'); ?>

    <title>رفع ملف صورة من نموذج</title>
</head>

<body>
    <header>
        <h1>رفع ملف (صورة) من نموذج</h1>
    </header>
    <div class="row">
        <div class="upload-container">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="fileToUpload">اختر صورة من جهازك</label>
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/gif, image/jpeg" value="here" required>
                <div class="buttons-div smaller-btns-div">
                    <button type="submit" class="submit-btn" id="submit" name="submit">رفع الصورة</button>
                </div>
            </form>
        </div>
        <?php require('upload_file.php'); ?>
        <div class="result">
            <?php
            if (isset($_FILES["fileToUpload"]["name"]) && !empty($_FILES["fileToUpload"]["name"])) {
                UploadImageFile();
            }
            ?>
        </div>
        <hr>
        <h2>الكود البرمجي لرفع ملف (صورة) من نموذج</h2>
        <div class="code" dir="ltr">
            <?php highlight_string(file_get_contents('upload_file.php') . '?>') ?>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>