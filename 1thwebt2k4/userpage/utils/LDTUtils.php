<?php

function chuyenUSD2VND($value) {
    return number_format($value * 22000,0,",",".") . " VNĐ";
}

function mauCuaGia($value) {
    if ($value > 4) {
        return "red";
    } else if ($value > 2) {
        return "#fbaf32";
    } else {
        return "green";
    }
}

?>
