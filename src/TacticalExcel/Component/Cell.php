<?php

namespace TacticalExcel\Component;


use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
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

    /* * * ========= * * */
    /* * * VALUATION * * */
    /* * * ========= * * */

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
     * @param $value
     * @param string $format
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function setDateTimeValue($value, $format = NumberFormat::FORMAT_DATE_YYYYMMDD2)
    {
        $this->cell->setValue(Date::PHPToExcel($value) ? : null);
        $this->cell->getStyle()->getNumberFormat()->setFormatCode($format);
        return $this;
    }

  /* * * ============ * * */
  /* * * TYPE CASTING * * */
  /* * * ============ * * */

  /**
   * @return $this
   */
  public function castInteger()
  {
      $this->cell->setDataType(DataType::TYPE_NUMERIC)->getStyle()->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER);

      return $this;
  }

  /**
   * @return $this
   */
  public function castFloat()
  {
      $this->cell->setDataType(DataType::TYPE_NUMERIC)->getStyle()->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER_00);

      return $this;
  }

  /**
   * @return $this
   */
  public function castPercentage()
  {
      $this->cell->setDataType(DataType::TYPE_NUMERIC)->getStyle()->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

      return $this;
  }

  /**
   * @return $this
   */
  public function castEuro()
  {
      $this->cell->setDataType(DataType::TYPE_NUMERIC)->getStyle()->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

      return $this;
  }

  /**
   * @return $this
   */
  public function castString()
  {
      $this->cell->setDataType(DataType::TYPE_STRING);

      return $this;
  }

    /* * * markup * * */

    /**
     * @param int $width
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function width($width)
    {
        $this->sheet->getColumnDimensionByColumn($this->getColumn())->setWidth($width);
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