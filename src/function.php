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

/**
 * @param $cols
 * @param $rows
 * @return void
 */
function task3($cols, $rows)
{
    for ($tr = 1; $tr <= $rows; $tr ++) {
        echo "<table style='align-content: center; border-spacing: 5px'>";
        echo "<tr>";
        for($td = 1; $td <= $cols; $td++) {
                echo "<td>" .$tr * $td."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

/**
 * @return void
 */
function task4()
{
    echo date('d.m.Y h:i');
    echo mktime(0, 0, 0, 2, 24, 2016);
}