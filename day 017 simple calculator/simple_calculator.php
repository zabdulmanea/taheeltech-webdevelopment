<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آلة حاسبة مُبسطة Simple Calculator</title>
</head>

<body>
    <h1>آلة حاسبة مُبسطة Simple Calculator</h1>
    <form method="POST" action="calculate.php" name="calform" id="calform">
        <div>
            <label for="no1">Number 1</label>
            <input type="number" step="0.1" name="no1" id="no1" required>
        </div>

        <div>
            <label for="no2">Number 2</label>
            <input type="number" step="0.1" name="no2" id="no2" required>
        </div>

        <div class="">
            <label for="arth_operation">Select Arithmetic Operator</label>
            <select name="arth_operation" id="arth_operation" required>
                <option value="" selected disabled hidden>Choose here</option>
                <option value="sum_operation">+</option>
                <option value="sub_operation">-</option>
                <option value="multi_operation">×</option>
                <option value="div_operation">÷</option>
                <option value="remind_operation">%</option>
                <!-- <option value="sqrt_operation">&Sqrt;</option> -->
            </select>

        </div>

        <div>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </div>

    </form>

    <div class="code" dir="ltr">
        <?php
        $code = file_get_contents('https://raw.githubusercontent.com/zabdulmanea/taheeltech-webdevelopment/dba28972efd0747b0a1e86afd5874835e021cb29/index.php');
        // $code = str_replace('$','\$',$code);
        // $code = str_replace('"','\"',$code);
        // highlight_string($code);  
        // highlight_string('<html>');
        ?>
    </div>

</body>

</html>