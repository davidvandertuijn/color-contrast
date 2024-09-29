# Color Contrast

<a href="https://packagist.org/packages/davidvandertuijn/color-contrast"><img src="https://poser.pugx.org/davidvandertuijn/color-contrast/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/color-contrast"><img src="https://poser.pugx.org/davidvandertuijn/color-contrast/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/color-contrast"><img src="https://poser.pugx.org/davidvandertuijn/color-contrast/license.svg" alt="License"></a>

![Color Contrast](https://cdn.davidvandertuijn.nl/github/color-contrast.png)

The Luminosity Contrast Algorithm is a powerful tool designed to assess the contrast of a color value relative to pure white (#FFFFFF) and pure black (#000000). This algorithm is essential for ensuring that text and visual elements are easily readable against their backgrounds, thereby enhancing accessibility and user experience.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```
composer require davidvandertuijn/color-contrast
```

## Usage

```php
use Davidvandertuijn\ColorContrast;
```

**Parse**

```php
ColorContrast::parse('#FF0000'); // #FFFFFF (red to white)
ColorContrast::parse('#FFFF00'); // #000000 (yellow to black)
```
