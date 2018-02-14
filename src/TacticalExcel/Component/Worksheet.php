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
//        echo '<hr>Get tactical cell:<br>';
        if (empty($this->tacticalCellCollection[$column][$row])) {
//            var_dump('nieuwe maken');
            $cell = parent::getCellByColumnAndRow($column, $row);
            $this->tacticalCellCollection[$column][$row] = new Cell($cell, $this);
        }
//        var_dump($column . ' - ' . $row . ' : ' . ($this->tacticalCellCollection[$column][$row]->getSpreadsheetCell()->getParent() ? 'heeft parent' : 'heeft geen parent'));
//        echo '<hr>';
        return $this->tacticalCellCollection[$column][$row];
    }
//
//    /**
//     * @param int $column
//     * @param int $row
//     * @param bool $createIfNotExists
//     * @return null|Cell
//     */
//    public function getCellByColumnAndRow($column, $row, $createIfNotExists = true)
//    {
//        if (! isset($this->cellCollection[$column][$row]) && $createIfNotExists) {
//            $this->cellCollection[$column][$row] = new Cell(parent::getCellByColumnAndRow($column, $row, true), $this);
//        }
//        return ! empty($this->cellCollection[$column][$row]) ? $this->cellCollection[$column][$row] : null;
//    }
}