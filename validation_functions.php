<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validate_text_length($text, $min_length, $max_length) {
    $length = strlen($text);
    return ($length >= $min_length && $length <= $max_length);
}

function validate_number_range($number, $min, $max) {
    return is_numeric($number) && $number >= $min && $number <= $max;
}

function validate_option($option, $valid_options) {
    return in_array($option, $valid_options);
}

?>
