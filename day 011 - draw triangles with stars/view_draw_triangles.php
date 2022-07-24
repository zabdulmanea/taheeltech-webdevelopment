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
            <div class="triangle-div">
                <?php
                for ($i = 0; $i < $tri_high; $i++) {
                    for ($j = 0; $j <= $i; $j++) {
                        echo '*';
                    }
                    echo '<br>';
                }
                ?>
            </div>

            <div class="code">
                <?php
                highlight_string("
<?php 
for (\$i = 0; \$i < \$tri_high; \$i++) {
    for (\$j = 0; \$j <= \$i; \$j++) {
        echo '*';
    }
    echo '<br>';
}
?>");
                ?>
            </div>

            <div class="triangle-div">
                <?php
                for ($i = 0; $i < $tri_high; $i++) {
                    for ($j = $tri_high; $j > $i; $j--) {
                        echo '*';
                    }
                    echo '<br>';
                }
                ?>
            </div>

            <div class="code">
                <?php
                highlight_string("
<?php 
for (\$i = 0; \$i < \$tri_high; \$i++) {
    for (\$j = \$tri_high; \$j > \$i; \$j--) {
        echo '*';
    }
    echo '<br>';
}
?>");
                ?>
            </div>

            <div class="triangle-div">
                <?php
                for ($i = 0; $i < $tri_high; $i++) {
                    for ($j = $tri_high - 1; $j > $i; $j--) {
                        echo '&nbsp;';
                    }
                    for ($k = 0; $k <= $i; $k++) {
                        echo '*';
                    }
                    echo '<br>';
                }
                ?>
            </div>

            <div class="code">
                <?php
                highlight_string("
<?php 
for (\$i = 0; \$i < \$tri_high; \$i++) {
    for (\$j = \$tri_high - 1; \$j > \$i; \$j--) {
        echo '&nbsp;';
    }
    for (\$k = 0; \$k <= \$i; \$k++) {
        echo '*';
    }
    echo '<br>';
}
?>");
                ?>
            </div>
        </div>

        <h2>رسم مثلث هرمي</h2>

        <div class="container">
            <div class="triangle-div">
                <?php
                $stars_counter = 0;
                for ($i = 0; $i < $tri_high; $i++) {
                    for ($j = $tri_high - 1; $j > $i; $j--) {
                        echo '&nbsp;';
                    }
                    $stars_counter++;
                    echo str_repeat('*', $stars_counter + $i) . '<br>';
                }
                ?>
            </div>

            <div class="code">
                <?php
                highlight_string("
<?php 
\$stars_counter = 0;
for (\$i = 0; \$i < \$tri_high; \$i++) {
    for (\$j = \$tri_high - 1; \$j > \$i; \$j--) {
        echo '&nbsp;';
    }
    \$stars_counter++;
    echo str_repeat('*', \$stars_counter + \$i) . '<br>';
}
?>");
                ?>
            </div>

            <div class="triangle-div">
                <?php
                for ($i = 1; $i <= $tri_high; $i++) {
                    for ($j = 1; $j < $i; $j++) {
                        echo '&nbsp;';
                    }
                    for ($k = $tri_high * 2 - $i; $k >= $i; $k--) {
                        echo '*';
                    }
                    echo '<br>';
                }
                ?>
            </div>

            <div class="code">
                <?php
                highlight_string("
<?php 
for (\$i = 1; \$i <= \$tri_high; \$i++) {
    for (\$j = 1; \$j < \$i; \$j++) {
        echo '&nbsp;';
    }
    for (\$k = \$tri_high*2 - \$i; \$k >= \$i; \$k--) {
        echo '*';
    }
    echo '<br>';
}
?>");
                ?>
            </div>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>