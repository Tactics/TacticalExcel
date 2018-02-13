<?php

namespace Component;

use PhpOffice\PhpSpreadsheet\Spreadsheet as PhpSpreadsheet;

class Spreadsheet extends PhpSpreadsheet
{
    public function __construct()
    {
        parent::__construct();
        $this->removeSheetByIndex(0);
    }

    public function addSheetWithTitle($title)
    {
        $sheet = new Worksheet($this, $title);
        $this->addSheet($sheet);
        return $this;
    }
}