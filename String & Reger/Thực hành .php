<?php

function  isFirstLetterUpperCase ($str) {
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo ("string's ký tự đầu tiên là chữ hoa");
    } else {
        echo ("string's Ký tự đầu tiên không phải là chữ hoa:");
    }
}
isFirstLetterUpperCase('Codegym');