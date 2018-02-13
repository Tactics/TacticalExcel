<?php

namespace Constant;


class Color
{
    // Excel colors according to the color menu
    // sorted by category in reference to the menu
    // from left to right and top to bottom
    // -------------

    // COLUMN 1
    const RGB_WHITE = 'FFFFFF';
    const RGB_WHITE_DARKER_05 = 'F2F2F2';
    const RGB_WHITE_DARKER_15 = 'D8D8D8';
    const RGB_WHITE_DARKER_25 = 'BFBFBF';
    const RGB_WHITE_DARKER_35 = self::RGB_GRAY_50_ACCENT_3;
    const RGB_WHITE_DARKER_50 = self::RGB_BLACK_LIGHTER_50;
    // COLUMN 2
    const RGB_BLACK = '000000';
    const RGB_BLACK_LIGHTER_50 = '7F7F7F';
    const RGB_BLACK_LIGHTER_35 = '595959';
    const RGB_BLACK_LIGHTER_25 = '3F3F3F';
    const RGB_BLACK_LIGHTER_15 = '262626';
    const RGB_BLACK_LIGHTER_05 = '0C0C0C';
    // COLUMN 3
    const RGB_GRAY_25 = 'E7E6E6';
    const RGB_GRAY_25_DARKER_10 = 'D0CECE';
    const RGB_GRAY_25_DARKER_25 = 'AEABAB';
    const RGB_GRAY_25_DARKER_50 = '757070';
    const RGB_GRAY_25_DARKER_75 = '3A3838';
    const RGB_GRAY_25_DARKER_90 = '171616';
    // COLUMN 4
    const RGB_BLUE_GRAY = '44546A';
    const RGB_BLUE_GRAY_LIGHTER_80 = 'D6DCE4';
    const RGB_BLUE_GRAY_LIGHTER_60 = 'ADB9CA';
    const RGB_BLUE_GRAY_LIGHTER_40 = '8496B0';
    const RGB_BLUE_GRAY_DARKER_25 = '323F4F';
    const RGB_BLUE_GRAY_DARKER_50 = '222A35';
    // COLUMN 5
    const RGB_BLUE_ACCENT_1 = '5B9BD5';
    const RGB_BLUE_ACCENT_1_LIGHTER_80 = 'DEEBF6';
    const RGB_BLUE_ACCENT_1_LIGHTER_60 = 'BDD7EE';
    const RGB_BLUE_ACCENT_1_LIGHTER_40 = '9CC3E5';
    const RGB_BLUE_ACCENT_1_DARKER_25 = '2E75B5';
    const RGB_BLUE_ACCENT_1_DARKER_50 = '1E4E79';
    // COLUMN 6
    const RGB_ORANGE_ACCENT_2 = 'ED7D31';
    const RGB_ORANGE_ACCENT_2_LIGHTER_80 = 'FBE5D5';
    const RGB_ORANGE_ACCENT_2_LIGHTER_60 = 'F7CBAC';
    const RGB_ORANGE_ACCENT_2_LIGHTER_40 = 'F4B183';
    const RGB_ORANGE_ACCENT_2_DARKER_25 = 'C55A11';
    const RGB_ORANGE_ACCENT_2_DARKER_50 = '833C0B';
    // COLUMN 7
    const RGB_GRAY_50_ACCENT_3 = 'A5A5A5';
    const RGB_GRAY_50_ACCENT_3_LIGHTER_80 = 'EDEDED';
    const RGB_GRAY_50_ACCENT_3_LIGHTER_60 = 'DBDBDB';
    const RGB_GRAY_50_ACCENT_3_LIGHTER_40 = 'C9C9C9';
    const RGB_GRAY_50_ACCENT_3_DARKER_25 = '7B7B7B';
    const RGB_GRAY_50_ACCENT_3_DARKER_50 = '525252';
    // COMUMN 8
    const RGB_GOLD_ACCENT_4 = 'FFC000';
    const RGB_GOLD_ACCENT_4_LIGHTER_80 = 'FFF2CC';
    const RGB_GOLD_ACCENT_4_LIGHTER_60 = 'FEE599';
    const RGB_GOLD_ACCENT_4_LIGHTER_40 = 'FFD965';
    const RGB_GOLD_ACCENT_4_DARKER_25 = 'BF9000';
    const RGB_GOLD_ACCENT_4_DARKER_50 = '7F6000';
    // COMUMN 9
    const RGB_BLUE_ACCENT_5 = '4472C4';
    const RGB_BLUE_ACCENT_5_LIGHTER_80 = 'D9E2F3';
    const RGB_BLUE_ACCENT_5_LIGHTER_60 = 'B4C6E7';
    const RGB_BLUE_ACCENT_5_LIGHTER_40 = '8EAADB';
    const RGB_BLUE_ACCENT_5_DARKER_25 = '2F5496';
    const RGB_BLUE_ACCENT_5_DARKER_50 = '1F3864';
    // COLUMN 10
    const RGB_GREEN_ACCENT_6 = '70AD47';
    const RGB_GREEN_ACCENT_6_LIGHTER_80 = 'E2EFD9';
    const RGB_GREEN_ACCENT_6_LIGHTER_60 = 'C5E0B3';
    const RGB_GREEN_ACCENT_6_LIGHTER_40 = 'A8D08D';
    const RGB_GREEN_ACCENT_6_DARKER_25 = '538135';
    const RGB_GREEN_ACCENT_6_DARKER_50 = '375623';
    // STANDARD COLORS
    const RGB_DARK_RED = 'C00000';
    const RGB_RED = 'FF0000';
    const RGB_ORANGE = 'FFC000';
    const RGB_YELLOW = 'FFFF00';
    const RGB_LIGHT_GREEN = '92D050';
    const RGB_GREEN = '00B050';
    const RGB_LIGHT_BLUE = '00B0F0';
    const RGB_BLUE = '0070C0';
    const RGB_DARK_BLUE = '002060';
    const RGB_PURPLE = '7030A0';

//TODO official html colors?
//    const RGB_MAGENTA = 'FF00FF';
//    const RGB_CYAN = '00FFFF';
//    const RGB_PINK = 'FF99CC';
//    const RGB_LILAC = 'CC99FF';
//    const RGB_LIGHT_CYAN = self::RGB_LIGHTER_BLUE;
//    const RGB_LIGHTER_YELLOW = 'FFFFCC';
//    const RGB_LIGHT_YELLOW = 'FFFF99';
//    const RGB_DARK_YELLOW = 'FFCC00';
//    const RGB_DARK_ORANGE = 'FF6600';
//    const RGB_OLIVE = '99CC00';
//    const RGB_SALMON = 'FFCC99';
//    const RGB_LIGHTER_BLUE = 'CCFFFF';
//    const RGB_SKY_BLUE = '00CCFF';
//    const RGB_ROYAL_BLUE = '0000FF';
//    const RGB_SEA_BLUE = '33CCCC';
//    const RGB_DARK_ROYAL_BLUE = '000080';
//    const RGB_LIGHTER_GREEN = 'CCFFCC';
//    const RGB_SEA_GREEN = '339966';
//    const RGB_DARK_GREY = '666666';
//    const RGB_GREY = '999999';
//    const RGB_LIGHT_GREY = 'CCCCCC';
//    const RGB_LIGHTER_GREY = 'E0E0E0';
}