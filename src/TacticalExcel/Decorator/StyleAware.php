<?php

namespace TacticalExcel\Decorator;


use PhpOffice\PhpSpreadsheet\Style\Style;

interface StyleAware
{
    /** @return Style */
    public function getStyle();

    /**
     * @param Style $style
     * @return StyleAware
     */
    public function copyStyle(Style $style);
}