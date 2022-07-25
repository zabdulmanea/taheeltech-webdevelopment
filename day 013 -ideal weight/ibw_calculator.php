<?php
/*
    IBW Calculator: ideal body weight
    IBW needs Gender & Height
    Gender => female or male
    Height => cm
    IBW (MEN) = 50 + (0.91 × [height in centimeters − 152.4])
    IBW (WOMEN) = 45.5 + (0.91 × [height in centimeters − 152.4])
    */

### ALGORITHM ###
/*
    Get Gender
    Get Height
    Caluclate IBW based on gender 
    */

$gender = $_POST['gender'] ?? '';
$height = $_POST['height'] ?? '';
$ibw;

if (
    isset($height) && isset($gender)
    && !empty($height) && !empty($gender)
) {
    switch ($gender) {
        case 'female':
            $ibw = 45.5 + (0.91 * ($height - 152.4));
            break;
        case 'male':
            $ibw = 50 + (0.91 * ($height - 152.4));
            break;
        default:
            $ibw = 0;
    }
}
