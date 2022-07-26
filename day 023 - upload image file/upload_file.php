<?php

function UploadImageFile()
{
    #directory name
    $target_dir = "uploads/";
    #Uploaded file name
    $fileToUpload_name = basename($_FILES["fileToUpload"]["name"]);
    #Uploaded file relative path
    $target_file = $target_dir . $fileToUpload_name;

    if (!isImgReal()) return;

    if (isFileExists($target_file)) return;

    if (isNotImage($target_file)) return;

    // upload image file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<p class="success-msg">تم رفع الصورة بنجاح</p>';
        echo showImg($target_file);
    } else {
        echo '<p class="error-msg">عذرًا، هناك خطأ في رفع الصورة</p>';
    }
}

// Check if image file is an actual image or fake image
function isImgReal()
{
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check == false) {
            echo '<p class="error-msg">الملف المرفق ليس صورة</p>';
            return 0;
        }
    }
    return 1;
}

// Check if file already exists
function isFileExists($target_file)
{
    if (file_exists($target_file)) {
        echo '<p class="error-msg">عذرا ، الصورة موجودة مسبقًا.</p>';
        echo showImg($target_file);
        return 1;
    }
    return 0;
}

function isNotImage($target_file)
{
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo '<p class="error-msg">عذزًا، صيغ الملفات المدعومة هي JPG, JPEG, PNG & GIF.</p>';
        return 1;
    }
    return 0;
}

function showImg($target_file)
{
    $stats['localpath'] =   $target_file;
    return '<div class="uploadedImg-div"><img src="' . $stats['localpath'] . '"/></div>';
}
