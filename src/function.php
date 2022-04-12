<?php

function task1($arr, $ret = false)
{
    if ($ret && is_array($arr)) {
        return implode(' ', $arr);
    }

    if (is_array($arr)) {
        foreach ($arr as $item) {
            echo '<p>' . $item . '</p>';
        }
    }
}
