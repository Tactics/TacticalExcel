<?php

namespace TacticalExcel\Component;


use PhpOffice\PhpSpreadsheet\Spreadsheet as PhpSpreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet as PhpWorksheet;

class Worksheet extends PhpWorksheet
{
    private $tacticalCellCollection = [];

    public function __construct(PhpSpreadsheet $parent = null, $pTitle = 'Worksheet')
    {
        parent::__construct($parent, $pTitle);
    }

    /**
     * @param int $column
     * @param int $row
     * @return Cell
     */
    public function getTacticalCellByColumnAndRow($column, $row)
    {
        if (empty($this->tacticalCellCollection[$column][$row])) {
            $cell = parent::getCellByColumnAndRow($column, $row);
            $this->tacticalCellCollection[$column][$row] = new Cell($cell, $this);
        }
        return $this->tacticalCellCollection[$column][$row];
    }
}