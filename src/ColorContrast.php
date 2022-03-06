<?php

namespace Davidvandertuijn;

/**
 * Color Contrast.
 */
class ColorContrast
{
    /**
     * Parse.
     *
     * @param string $color
     *
     * @return string
     */
    public static function parse(string $color): string {
        // HEX to RGB

        $r1 = hexdec(substr($color, 1, 2));
        $g1 = hexdec(substr($color, 3, 2));
        $b1 = hexdec(substr($color, 5, 2));

        // Black

        $black = '#000000';
        $r2black = hexdec(substr($black, 1, 2));
        $g2black = hexdec(substr($black, 3, 2));
        $b2black = hexdec(substr($black, 5, 2));

        // Contrast Ratio

        $l1 = 0.2126 * pow($r1 / 255, 2.2) +
            0.7152 * pow($g1 / 255, 2.2) +
            0.0722 * pow($b1 / 255, 2.2);

        $l2 = 0.2126 * pow($r2black / 255, 2.2) +
            0.7152 * pow($g2black / 255, 2.2) +
            0.0722 * pow($b2black / 255, 2.2);

        if ($l1 > $l2) {
            $contrastRatio = (int) (($l1 + 0.05) / ($l2 + 0.05));
        } else {
            $contrastRatio = (int) (($l2 + 0.05) / ($l1 + 0.05));
        }

        if ($contrastRatio > 5) {
            return '#000000';
        } else {
            return '#FFFFFF';
        }
    }
}
