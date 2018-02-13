<?php

namespace Component;


use Decorator\StyleAware;
use Decorator\Traits\BackgroundColorTrait;
use Decorator\Traits\BorderTrait;
use Decorator\Traits\FontTrait;
use PhpOffice\PhpSpreadsheet\Style\Style;

class Cell implements StyleAware
{
    use BorderTrait;
    use BackgroundColorTrait;
    use FontTrait;

    /** @var Worksheet */
    private $sheet;
    /** @var \PhpOffice\PhpSpreadsheet\Cell\Cell */
    private $cell;

    public function __construct(\PhpOffice\PhpSpreadsheet\Cell\Cell $cell, Worksheet $sheet)
    {
        $this->cell = $cell;
        $this->sheet = $sheet;
    }

    public function getSpreadsheetCell()
    {
        return $this->cell;
    }

    public function getSheet()
    {
        return $this->sheet;
    }

    public function getStyle()
    {
        return $this->cell->getStyle();
    }

    public function copyStyle(Style $style)
    {
        $this->getStyle()->applyFromArray($style->getStyleArray());

        return $this;
    }

    /* * * identification * * */

    public function __toString()
    {
        return $this->cell->getCoordinate();
    }

    public function getColumn()
    {
        return $this->cell->getColumn();
    }

    public function getRow()
    {
        return $this->cell->getRow();
    }

    /* * * orientation * * */

    public function left($step = 1)
    {
        if ($step < 1) {
            $step = 1;
        }

        $column = (int) $this->getColumn() - $step;
        return $this->sheet->getCellByColumnAndRow($column, $this->getRow());
    }

    public function right($step = 1)
    {
        if ($step < 1) {
            $step = 1;
        }

        $column = (int) $this->getColumn() + $step;
        return $this->sheet->getCellByColumnAndRow($column, $this->getRow());
    }

    public function up($step = 1)
    {
        if ($step < 1) {
            $step = 1;
        }

        $column = (int) $this->getRow() - $step;
        return $this->sheet->getCellByColumnAndRow($column, $this->getRow());
    }

    public function down($step = 1)
    {
        if ($step < 1) {
            $step = 1;
        }

        $column = (int) $this->getRow() + $step;
        return $this->sheet->getCellByColumnAndRow($column, $this->getRow());
    }
//
//
//
//    public function controllerAction()
//    {
//        return composeStyles(
//            $cell,
//                Style::fontBold(),
//                Style::colorBlack(),
//                Style::borderDouble()
//
//        );
//    }
}

//class Style {
//    public static function fontBold() {
//        return function (StyleAware $s) {
//            $style = $s->getStyle();
//            $style->applyFromArray([]);
//
//            return $s;
//        };
//    }
//}
//
//function composeStyles(StyleAware $c, callable  ...$functions ) {
//    foreach($functions as $f) {
//        $c = $f($c);
//    }
//
//    return $c;
//}