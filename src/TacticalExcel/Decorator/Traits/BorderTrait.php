<?php

namespace TacticalExcel\Decorator\Traits;


use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Style;
use TacticalExcel\Constant\Color;

trait BorderTrait
{
    /**
     * @param string $border
     * @param null $rgb
     * @return $this
     */
    public function border($border = Border::BORDER_THIN, $rgb = null)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style
            ->applyFromArray([
                'borders' => [
                    'allborders' => [
                        'borderStyle' => $border,
                        'color' => [
                            'rgb' => $rgb ? : $style->getFont()->getColor()->getRGB(),
                        ],
                    ],
                ],
            ])
        ;

        return $this;
    }

    /** @return $this */
    public function borderThin(){return $this->border(Border::BORDER_THIN);}
    /** @return $this */
    public function borderThinDarkRed(){return $this->border(Border::BORDER_THIN, Color::RGB_DARK_RED);}
    /** @return $this */
    public function borderThinRed(){return $this->border(Border::BORDER_THIN, Color::RGB_RED);}
    /** @return $this */
    public function borderThinOrange(){return $this->border(Border::BORDER_THIN, Color::RGB_ORANGE);}
    /** @return $this */
    public function borderThinYellow(){return $this->border(Border::BORDER_THIN, Color::RGB_YELLOW);}
    /** @return $this */
    public function borderThinLightGreen(){return $this->border(Border::BORDER_THIN, Color::RGB_LIGHT_GREEN);}
    /** @return $this */
    public function borderThinGreen(){return $this->border(Border::BORDER_THIN, Color::RGB_GREEN);}
    /** @return $this */
    public function borderThinLightBlue(){return $this->border(Border::BORDER_THIN, Color::RGB_LIGHT_BLUE);}
    /** @return $this */
    public function borderThinBlue(){return $this->border(Border::BORDER_THIN, Color::RGB_BLUE);}
    /** @return $this */
    public function borderThinDarkBlue(){return $this->border(Border::BORDER_THIN, Color::RGB_DARK_BLUE);}
    /** @return $this */
    public function borderThinPurple(){return $this->border(Border::BORDER_THIN, Color::RGB_PURPLE);}
    /** @return $this */
    public function borderThinWhite(){return $this->border(Border::BORDER_THIN, Color::RGB_WHITE);}
    /** @return $this */
    public function borderThinLightGray(){return $this->border(Border::BORDER_THIN, Color::RGB_GRAY_25);}
    /** @return $this */
    public function borderThinDarkGray(){return $this->border(Border::BORDER_THIN, Color::RGB_GRAY_50_ACCENT_3);}
    /** @return $this */
    public function borderThinBlack(){return $this->border(Border::BORDER_THIN, Color::RGB_BLACK);}

    /** @return $this */
    public function borderThick(){return $this->border(Border::BORDER_THICK);}
    /** @return $this */
    public function borderThickDarkRed(){return $this->border(Border::BORDER_THICK, Color::RGB_DARK_RED);}
    /** @return $this */
    public function borderThickRed(){return $this->border(Border::BORDER_THICK, Color::RGB_RED);}
    /** @return $this */
    public function borderThickOrange(){return $this->border(Border::BORDER_THICK, Color::RGB_ORANGE);}
    /** @return $this */
    public function borderThickYellow(){return $this->border(Border::BORDER_THICK, Color::RGB_YELLOW);}
    /** @return $this */
    public function borderThickLightGreen(){return $this->border(Border::BORDER_THICK, Color::RGB_LIGHT_GREEN);}
    /** @return $this */
    public function borderThickGreen(){return $this->border(Border::BORDER_THICK, Color::RGB_GREEN);}
    /** @return $this */
    public function borderThickLightBlue(){return $this->border(Border::BORDER_THICK, Color::RGB_LIGHT_BLUE);}
    /** @return $this */
    public function borderThickBlue(){return $this->border(Border::BORDER_THICK, Color::RGB_BLUE);}
    /** @return $this */
    public function borderThickDarkBlue(){return $this->border(Border::BORDER_THICK, Color::RGB_DARK_BLUE);}
    /** @return $this */
    public function borderThickPurple(){return $this->border(Border::BORDER_THICK, Color::RGB_PURPLE);}
    /** @return $this */
    public function borderThickWhite(){return $this->border(Border::BORDER_THICK, Color::RGB_WHITE);}
    /** @return $this */
    public function borderThickLightGray(){return $this->border(Border::BORDER_THICK, Color::RGB_GRAY_25);}
    /** @return $this */
    public function borderThickDarkGray(){return $this->border(Border::BORDER_THICK, Color::RGB_GRAY_50_ACCENT_3);}
    /** @return $this */
    public function borderThickBlack(){return $this->border(Border::BORDER_THICK, Color::RGB_BLACK);}

    /**
     * @param string $outline
     * @param null $rgb
     * @return $this
     */
    public function outline($outline = Border::BORDER_THIN, $rgb = null)
    {
        /** @var Style $style */
        $style = $this->getStyle();

        $style
            ->applyFromArray([
                'borders' => [
                    'outline' => [
                        'borderStyle' => $outline,
                        'color' => [
                            'rgb' => $rgb ? : $style->getFont()->getColor()->getRGB(),
                        ],
                    ],
                ],
            ])
        ;

        return $this;
    }

    /** @return $this */
    public function outlineThin(){return $this->outline(Border::BORDER_THIN);}
    /** @return $this */
    public function outlineThinDarkRed(){return $this->outline(Border::BORDER_THIN, Color::RGB_DARK_RED);}
    /** @return $this */
    public function outlineThinRed(){return $this->outline(Border::BORDER_THIN, Color::RGB_RED);}
    /** @return $this */
    public function outlineThinOrange(){return $this->outline(Border::BORDER_THIN, Color::RGB_ORANGE);}
    /** @return $this */
    public function outlineThinYellow(){return $this->outline(Border::BORDER_THIN, Color::RGB_YELLOW);}
    /** @return $this */
    public function outlineThinLightGreen(){return $this->outline(Border::BORDER_THIN, Color::RGB_LIGHT_GREEN);}
    /** @return $this */
    public function outlineThinGreen(){return $this->outline(Border::BORDER_THIN, Color::RGB_GREEN);}
    /** @return $this */
    public function outlineThinLightBlue(){return $this->outline(Border::BORDER_THIN, Color::RGB_LIGHT_BLUE);}
    /** @return $this */
    public function outlineThinBlue(){return $this->outline(Border::BORDER_THIN, Color::RGB_BLUE);}
    /** @return $this */
    public function outlineThinDarkBlue(){return $this->outline(Border::BORDER_THIN, Color::RGB_DARK_BLUE);}
    /** @return $this */
    public function outlineThinPurple(){return $this->outline(Border::BORDER_THIN, Color::RGB_PURPLE);}
    /** @return $this */
    public function outlineThinWhite(){return $this->outline(Border::BORDER_THIN, Color::RGB_WHITE);}
    /** @return $this */
    public function outlineThinLightGray(){return $this->outline(Border::BORDER_THIN, Color::RGB_GRAY_25);}
    /** @return $this */
    public function outlineThinDarkGray(){return $this->outline(Border::BORDER_THIN, Color::RGB_GRAY_50_ACCENT_3);}
    /** @return $this */
    public function outlineThinBlack(){return $this->outline(Border::BORDER_THIN, Color::RGB_BLACK);}

    /** @return $this */
    public function outlineThick(){return $this->outline(Border::BORDER_THICK);}
    /** @return $this */
    public function outlineThickDarkRed(){return $this->outline(Border::BORDER_THICK, Color::RGB_DARK_RED);}
    /** @return $this */
    public function outlineThickRed(){return $this->outline(Border::BORDER_THICK, Color::RGB_RED);}
    /** @return $this */
    public function outlineThickOrange(){return $this->outline(Border::BORDER_THICK, Color::RGB_ORANGE);}
    /** @return $this */
    public function outlineThickYellow(){return $this->outline(Border::BORDER_THICK, Color::RGB_YELLOW);}
    /** @return $this */
    public function outlineThickLightGreen(){return $this->outline(Border::BORDER_THICK, Color::RGB_LIGHT_GREEN);}
    /** @return $this */
    public function outlineThickGreen(){return $this->outline(Border::BORDER_THICK, Color::RGB_GREEN);}
    /** @return $this */
    public function outlineThickLightBlue(){return $this->outline(Border::BORDER_THICK, Color::RGB_LIGHT_BLUE);}
    /** @return $this */
    public function outlineThickBlue(){return $this->outline(Border::BORDER_THICK, Color::RGB_BLUE);}
    /** @return $this */
    public function outlineThickDarkBlue(){return $this->outline(Border::BORDER_THICK, Color::RGB_DARK_BLUE);}
    /** @return $this */
    public function outlineThickPurple(){return $this->outline(Border::BORDER_THICK, Color::RGB_PURPLE);}
    /** @return $this */
    public function outlineThickWhite(){return $this->outline(Border::BORDER_THICK, Color::RGB_WHITE);}
    /** @return $this */
    public function outlineThickLightGray(){return $this->outline(Border::BORDER_THICK, Color::RGB_GRAY_25);}
    /** @return $this */
    public function outlineThickDarkGray(){return $this->outline(Border::BORDER_THICK, Color::RGB_GRAY_50_ACCENT_3);}
    /** @return $this */
    public function outlineThickBlack(){return $this->outline(Border::BORDER_THICK, Color::RGB_BLACK);}
}