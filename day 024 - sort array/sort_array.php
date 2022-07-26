
<?php

#Sort a multi-dimensional array in ascending order 
function ascending_sort($array, $key)
{
    // Obtain a list of columns
    $name  = array_column($array, 'name');
    $percentage = array_column($array, 'total_percentage');

    if ($key == 'name') {
        // Sort the array with name ascending, percentage ascending
        // Add $array as the last parameter, to sort by the common key
        array_multisort(
            $name,
            SORT_ASC,
            SORT_STRING,
            $percentage,
            SORT_ASC,
            SORT_NUMERIC,
            $array
        );
    } else {
        // Sort the array with percentage ascending, name ascending
        array_multisort(
            $percentage,
            SORT_ASC,
            SORT_NUMERIC,
            $name,
            SORT_ASC,
            SORT_STRING,
            $array
        );
    }
    return $array;
}

#Sort a multi-dimensional array in descending order 
function descending_sort($array, $key)
{
    // Obtain a list of columns
    $name  = array_column($array, 'name');
    $percentage = array_column($array, 'total_percentage');

    if ($key == 'name') {
        // Sort the array with name descending, percentage ascending
        // Add $array as the last parameter, to sort by the common key
        array_multisort(
            $name,
            SORT_DESC,
            SORT_STRING,
            $percentage,
            SORT_ASC,
            SORT_NUMERIC,
            $array
        );
    } else {
        // Sort the array with percentage descending, name ascending
        array_multisort(
            $percentage,
            SORT_DESC,
            SORT_NUMERIC,
            $name,
            SORT_ASC,
            SORT_STRING,
            $array
        );
    }
    return $array;
}
?>