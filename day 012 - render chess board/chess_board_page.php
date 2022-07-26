<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../head.php'); ?>

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