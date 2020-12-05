<?php

class Report
{
    private $report;
    public function setReport()
    {
        $this->report = "<h2>Relatórios na Classe</h2>";
    }
    public function getReport()
    {
        return $this->report;
    }
}