<?php

namespace Component;


use Decorator\StyleAware;
use Decorator\Traits\BackgroundColorTrait;
use Decorator\Traits\BorderTrait;
use Decorator\Traits\FontTrait;
use PhpOffice\PhpSpreadsheet\Style\Style;

class CellRange implements StyleAware
{
    use BorderTrait;
    use BackgroundColorTrait;
    use FontTrait;

    /** @var Cell */
    private $topLeftCell;
    /** @var Cell */
    private $bottomRightCell;

    public function __construct(Cell $topLeftCell, Cell $bottomRightCell)
    {
        $this->topLeftCell = $topLeftCell;
        $this->bottomRightCell = $bottomRightCell;
    }

    /** @return Cell */
    public function getTopLeftCell(){return $this->topLeftCell;}
    /** @return Cell */
    public function getBottomRightCell(){return $this->bottomRightCell;}

    public function getStyle()
    {
        return $this->topLeftCell
            ->getSheet()
            ->getStyleByColumnAndRow($this->topLeftCell->getColumn(), $this->topLeftCell->getRow(), $this->bottomRightCell->getColumn(), $this->bottomRightCell->getRow())
        ;
    }

    public function copyStyle(Style $style)
    {
        $this->getStyle()->applyFromArray($style->getStyleArray());

        return $this;
    }
}