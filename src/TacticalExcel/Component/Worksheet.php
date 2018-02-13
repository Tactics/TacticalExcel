<?php

namespace TacticalExcel\Component;


use PhpOffice\PhpSpreadsheet\Spreadsheet as PhpSpreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet as PhpWorksheet;

class Worksheet extends PhpWorksheet
{
    private $cellCollection = [];

    public function __construct(PhpSpreadsheet $parent = null, $pTitle = 'Worksheet')
    {
        parent::__construct($parent, $pTitle);
    }

    /**
     * @param int $column
     * @param int $row
     * @param bool $createIfNotExists
     * @return null|Cell
     */
    public function getCellByColumnAndRow($column, $row, $createIfNotExists = true)
    {
        if (! isset($this->cellCollection[$column][$row]) && $createIfNotExists) {
            $this->cellCollection[$column][$row] = new Cell(parent::getCellByColumnAndRow($column, $row, true), $this);
        }
        return ! empty($this->cellCollection[$column][$row]) ? $this->cellCollection[$column][$row] : null;
    }
}