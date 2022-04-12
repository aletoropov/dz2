<?php

/**
 * @param $arr
 * @param $ret
 * @return string|void
 */
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

/**
 * @return void
 */
function task2()
{
    $argc = func_get_args();
    $do = $argc[0];
    $res = $argc[1];
    switch ($do) {
        case '+':
            for($i = 2; $i < sizeof($argc); $i++) {
                $res = (int) $res + (int) $argc[$i];
            }
            break;
        case '-':
            for($i = 1; $i <= sizeof($argc); $i++) {
                $res = (int) $res - $argc[$i];
            }
            break;
        case '*':
            for($i = 1; $i <= sizeof($argc); $i++) {
                $res = (int) $res * $argc[$i];
            }
            break;
        case '/':
            for($i = 1; $i <= sizeof($argc); $i++) {
                $res = (int) $res / $argc[$i];
            }
            break;
        default:
            echo 'неизвестный оператор!';
    }
    echo $res;
}
