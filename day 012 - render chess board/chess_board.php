<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Spline+Sans+Mono:wght@600&family=Tajawal&display=swap" rel="stylesheet">

    <title>رسم مخطط قطع الشطرنج</title>

    <style>

        .chess,
        .code {
            margin: 10px;
            padding: 20px;
            align-self:center;
        }

        .code {
            background-color: white;
            border-radius: 10px;
        }

        .chess {
            text-align: center;
            font-size: 0;
            min-width: 50%;
        }

        .cell {
            display: inline-block;
            margin: 0;
            width: 35px;
            height: 35px;
            border: 1px solid black;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>

</head>

<body>
    <h1>رسم مخطط قطع الشطرنج</h1>
    <div class="container">
        <div class="chess">
            <?php
            $chessize = 8;
            $black = '<div class="black cell"></div>';
            $white = '<div class="white cell"></div>';
            for ($i = 0; $i < $chessize; $i++) {
                for ($j = 0; $j < $chessize; $j++) {
                    $x = $i + $j;
                    if ($x % 2 == 0) {
                        echo $white;
                    } else {
                        echo $black;
                    }
                }
                echo '<br>';
            }
            ?>
        </div>
        <hr>
        
        <div class="code">
            <?php
            highlight_string("
<?php 
\$chessize = 8;
\$black = '<div class='black cell'></div>';
\$white = '<div class='white cell'></div>';
for (\$i = 0; \$i < \$chessize; \$i++) {
    for (\$j = 0; \$j < \$chessize; \$j++) {
        \$x = \$i + \$j;
        if (\$x % 2 == 0) {
            echo \$white;
        } else {
            echo \$black;
        }
    }
    echo '<br>';
}
?>");
            ?>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>