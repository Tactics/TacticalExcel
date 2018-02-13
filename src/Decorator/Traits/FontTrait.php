<?php

namespace TacticalExcel\Decorator\Traits;


use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Style;
use TacticalExcel\Constant\Color;

trait FontTrait
{
    /**
     * @param int $size
     * @param bool $bold
     * @param bool $italic
     * @param bool $underline
     * @param string|null $rgb
     * @return $this
     */
    public function font($size = 11, $bold = false, $italic = false, $underline = false, $rgb = null)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style
            ->applyFromArray([
                'font' => [
                    'bold' => $bold,
                    'italic' => $italic,
                    'underline' => $underline,
                    'size' => $size,
                    'color' => [
                        'rgb' => $rgb ? : Color::RGB_BLACK
                    ],
                ],
            ])
        ;

        return $this;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function fontSize($size)
    {
        if (is_integer($size) && $size > 0) {
            /** @var Style $style */
            $style = $this->getStyle();

            $style->getFont()->setSize($size);
        }

        return $this;

    }

    /**
     * @param bool $bold
     * @return $this
     */
    public function fontBold($bold = true)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style->getFont()->setBold($bold);

        return $this;
    }

    /**
     * @param bool $italic
     * @return $this
     */
    public function fontItalic($italic = true)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style->getFont()->setItalic($italic);

        return $this;
    }

    /**
     * @param bool $underline
     * @return $this
     */
    public function fontUnderline($underline = true)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style->getFont()->setUnderline($underline);

        return $this;
    }

    /**
     * @param string $rgb
     * @return $this
     */
    public function fontColor($rgb)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style->getFont()->getColor()->setRGB($rgb);

        return $this;
    }

    /** @return $this */
    public function fontNormal(){return $this->font();}

    /**
     * @param string $align
     * @return $this
     */
    public function alignHorizontal($align)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style->getAlignment()->setHorizontal($align);

        return $this;
    }

    /** @return $this */
    public function alignLeft(){return $this->alignHorizontal(Alignment::HORIZONTAL_LEFT);}
    /** @return $this */
    public function alignCenter(){return $this->alignHorizontal(Alignment::HORIZONTAL_CENTER);}
    /** @return $this */
    public function alignRight(){return $this->alignHorizontal(Alignment::HORIZONTAL_RIGHT);}

    /**
     * @param bool $wrapText
     * @return $this
     */
    public function wrapText($wrapText = true)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style->getAlignment()->setWrapText($wrapText);

        return $this;
    }
}