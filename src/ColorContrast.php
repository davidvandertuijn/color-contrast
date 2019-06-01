<?php

namespace Davidvandertuijn;

class ColorContrast
{
    /**
     * Parse.
     *
     * @param string $sColor
     *
     * @return string
     */
    public static function parse(string $sColor): string {
        // HEX to RGB

        $R1 = hexdec(substr($sColor, 1, 2));
        $G1 = hexdec(substr($sColor, 3, 2));
        $B1 = hexdec(substr($sColor, 5, 2));

        // Black

        $sBlack = '#000000';
        $R2Black = hexdec(substr($sBlack, 1, 2));
        $G2Black = hexdec(substr($sBlack, 3, 2));
        $B2Black = hexdec(substr($sBlack, 5, 2));

        // Contrast Ratio

        $L1 = 0.2126 * pow($R1 / 255, 2.2) +
            0.7152 * pow($G1 / 255, 2.2) +
            0.0722 * pow($B1 / 255, 2.2);

        $L2 = 0.2126 * pow($R2Black / 255, 2.2) +
            0.7152 * pow($G2Black / 255, 2.2) +
            0.0722 * pow($B2Black / 255, 2.2);

        if ($L1 > $L2) {
            $iContrastRatio = (int) (($L1 + 0.05) / ($L2 + 0.05));
        } else {
            $iContrastRatio = (int) (($L2 + 0.05) / ($L1 + 0.05));
        }

        if ($iContrastRatio > 5) {
            return '#000000';
        } else {
            return '#FFFFFF';
        }
    }
}
