# Color Contrast

<a href="https://packagist.org/packages/davidvandertuijn/color-contrast"><img src="https://poser.pugx.org/davidvandertuijn/color-contrast/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/color-contrast"><img src="https://poser.pugx.org/davidvandertuijn/color-contrast/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/color-contrast"><img src="https://poser.pugx.org/davidvandertuijn/color-contrast/license.svg" alt="License"></a>

![Color Contrast](https://cdn.davidvandertuijn.nl/github/color-contrast.png)

The **Luminosity Contrast Algorithm** is used to calculate whether the value is closer to *#FFFFFF* or *#000000*.

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
