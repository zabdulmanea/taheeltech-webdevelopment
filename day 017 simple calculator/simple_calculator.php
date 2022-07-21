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
</body>

</html>