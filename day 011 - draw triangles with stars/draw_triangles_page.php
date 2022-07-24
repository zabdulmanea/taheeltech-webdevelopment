<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Spline+Sans+Mono:wght@600&family=Tajawal&display=swap" rel="stylesheet">
    <title>رسم مثلثات بالنجوم</title>
    <?php require('draw_triangles.php'); ?>

    <style>
        html {
            background-color: #A5C9CA;
        }

        body {
            color: #395B64;
            background-color: #E7F6F2;
        }
    </style>
</head>

<body>
    <div class="row">
        <h1>تطبيق لرسم مثلثات بالنجوم</h1>

        <?php
        $tri_high = $_POST['tri_high'] ?? '';
        ?>

        <form name="form" action="" method="post" dir="rtl">
            <div class="tri_high-div">
                <label for="tri_high">أدخل ارتفاع المثلث: </label>
                <input type="number" name="tri_high" min="0" step="1" id="tri_high" value="<?php echo $tri_high ?>">
            </div>
        </form>

        <hr>

        <h2>رسم مثلث قائم الزاوية</h2>
        <div class="container">
            <?php
            $functions_list = ['BLTriangle', 'TLTriangle', 'BRTriangle', 'UTriangle', 'DTriangle'];
            $str_file = file_get_contents("draw_triangles.php");
            $code_list = explode('# <--------------------------------------->', $str_file);
            array_shift($code_list);

            for ($i = 0; $i < count($functions_list); $i++) {
            ?>
                <div class="triangle-div">
                    <?php echo $functions_list[$i]($tri_high); ?>
                </div>
                <div class="code">
                    <?php highlight_string("<?php" . $code_list[$i] . "?>");?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>