<?php

function isChecked(string $inputName, string $value)
{
    if (isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])) {
        echo "checked";
    }
}

function isFruitChecked(string $value)
{
    if (isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])) {
        echo "checked";
    }
}
