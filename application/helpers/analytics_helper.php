<?php

function getAnalyticsData() {
    require_once("gapi.class.php");

    $ga = new gapi("globalizacaotrabalhots@gmail.com", "ads2018IFRS");

    $id = '12345';

    $ga->requestReportData($id, 'month', array('pageviews', 'visits'));
    
    foreach ($ga->getResults() as $dados) {
        echo 'Mês ' . $dados . ': ' . $dados->getVisits() . ' Visita(s) e ' . $dados->getPageviews() . ' Pageview(s)';
    }
    die;
}