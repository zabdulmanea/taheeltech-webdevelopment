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

    <?php require('chess_board.php'); ?>
</head>

<body>
    <header>
        <h1>رسم مخطط قطع الشطرنج</h1>
    </header>
    <div class="row">
        <div class="container">
            <div class="chess">
                <?php echo print_chessBoard(); ?>
            </div>
            <hr>

            <div class="code">
                <?php highlight_string(file_get_contents('chess_board.php') . "?>"); ?>
            </div>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>