<?php

namespace Decorator\Traits;


use Constant\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;

trait BackgroundColorTrait
{
    /**
     * @param string $rgb
     * @return $this
     */
    public function bgColor($rgb)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style
            ->applyFromArray([
                'fill' => [
                    'fillType' => $rgb === null ? Fill::FILL_NONE : Fill::FILL_SOLID,
                    'color' => [
                        'rgb' => $rgb
                    ],
                ],
            ])
        ;

        return $this;
    }

    /** @return $this */
    public function bgColorDarkRed(){return $this->bgColor(Color::RGB_DARK_RED);}
    /** @return $this */
    public function bgColorRed(){return $this->bgColor(Color::RGB_RED);}
    /** @return $this */
    public function bgColorOrange(){return $this->bgColor(Color::RGB_ORANGE);}
    /** @return $this */
    public function bgColorYellow(){return $this->bgColor(Color::RGB_YELLOW);}
    /** @return $this */
    public function bgColorLightGreen(){return $this->bgColor(Color::RGB_LIGHT_GREEN);}
    /** @return $this */
    public function bgColorGreen(){return $this->bgColor(Color::RGB_GREEN);}
    /** @return $this */
    public function bgColorLightBlue(){return $this->bgColor(Color::RGB_LIGHT_BLUE);}
    /** @return $this */
    public function bgColorBlue(){return $this->bgColor(Color::RGB_BLUE);}
    /** @return $this */
    public function bgColorDarkBlue(){return $this->bgColor(Color::RGB_DARK_BLUE);}
    /** @return $this */
    public function bgColorPurple(){return $this->bgColor(Color::RGB_PURPLE);}
    /** @return $this */
    public function bgColorWhite(){return $this->bgColor(Color::RGB_WHITE);}
    /** @return $this */
    public function bgColorLightGray(){return $this->bgColor(Color::RGB_GRAY_25);}
    /** @return $this */
    public function bgColorDarkGray(){return $this->bgColor(Color::RGB_GRAY_50_ACCENT_3);}
    /** @return $this */
    public function bgColorBlack(){return $this->bgColor(Color::RGB_BLACK);}
    /** @return $this */
    public function bgColorNone(){return $this->bgColor(null);}
}