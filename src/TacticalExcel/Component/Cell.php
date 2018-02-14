<?php

namespace TacticalExcel\Component;


use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Style;
use TacticalExcel\Decorator\StyleAware;
use TacticalExcel\Decorator\Traits\BackgroundColorTrait;
use TacticalExcel\Decorator\Traits\BorderTrait;
use TacticalExcel\Decorator\Traits\FontTrait;

class Cell implements StyleAware
{
    use BorderTrait;
    use BackgroundColorTrait;
    use FontTrait;

    /** @var Worksheet */
    private $sheet;
    /** @var \PhpOffice\PhpSpreadsheet\Cell\Cell */
    private $cell;
    /** @var string */
    private $column;
    /** @var int */
    private $row;
    /** @var string */
    private $coordinate;

    public function __construct(\PhpOffice\PhpSpreadsheet\Cell\Cell $cell, Worksheet $sheet)
    {
        $this->cell = $cell;
        $this->sheet = $sheet;
        $this->column = $cell->getColumn();
        $this->row = $cell->getRow();
        $this->coordinate = $cell->getCoordinate();
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

    /** @return string */
    public function __toString(){return $this->coordinate;}

    /**
     * @return int
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function getColumn()
    {
        return Coordinate::columnIndexFromString($this->column);
    }

    /** @return int */
    public function getRow(){return $this->row;}

    /* * * valuation * * */

    /**
     * @param $value
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function setValue($value)
    {
        $this->cell->setValue($value);
        return $this;
    }

    /**
     * @param \DateTimeInterface $value
     * @param string $format
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function setDateTimeValue(\DateTimeInterface $value, $format = NumberFormat::FORMAT_DATE_YYYYMMDD2)
    {
        $this->cell->setValue(Date::PHPToExcel($value));
        $this->cell->getStyle()->getNumberFormat()->setFormatCode($format);
        return $this;
    }

    /**
     * @param bool $autosize
     * @return $this
     */
    public function autosize($autosize = true)
    {
        $this->sheet->getColumnDimensionByColumn($this->getColumn())->setAutoSize($autosize);
        return $this;

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