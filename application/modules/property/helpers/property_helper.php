<?php

function property_type_persian($val)
{
    switch ($val) {
        case "apartment":
            return "آپارتمان";
        case"store":
            return "مغازه";
        case "land":
            return "زمین یا خانه کلنگی";
        default:
            return $val;
    }
}

function span_nf($item)
{
    return "<span class='persian-number'>" . number_format($item) . "</span>";
}

function span_badge($item = '', $badge_type = "badge-primary")
{
    return "<span class='badge $badge_type'>$item</span>";
}


function ptranslate($name){
//    $map = array()
}

