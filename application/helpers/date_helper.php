<?php

function getDateShowFormat($date) {
    $arrDate = explode("-", $date);
    return $arrDate[2] . "/" . $arrDate[1] ."/" . $arrDate[0];
}

function getDateDatabaseFormat($date) {
    $arrDate = explode("/", $date);
    return $arrDate[2] . "-" . $arrDate[1] ."-" . $arrDate[0];
}