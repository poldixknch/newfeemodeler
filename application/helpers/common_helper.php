<?php

function toNumeric($val) {
    return preg_replace("/[^0-9.]/", "", $val);
}

function numericDisplay($val) {
    return str_replace('.00', '', number_format(floatval($val), 2));
}