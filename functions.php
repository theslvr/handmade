<?php



function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function format_sum($number) {
    $number_ceil = ceil($number);
    if($number_ceil < 1000){
        return $number_ceil ." ₽";
    }
    $final_price = number_format($number_ceil, 0, ',', ' ');
    return $final_price." ₽";
}
function showTimeLeft() {
    $tomorrow_timestamp = strtotime('tomorrow');
    $time_left = $tomorrow_timestamp - strtotime('now');
    return date('H:i', $time_left);
}
    ?>