#### Specially Thanks

This package based on [vue-number-format](https://github.com/coders-tm/vue-number-format)
and thanks to [Coderstm](https://github.com/coders-tm) for maintaining it.
---

[![Latest Version on Packagist](https://img.shields.io/packagist/v/masoudi/number-plus.svg?style=flat)](https://packagist.org/packages/masoudi/number-plus)
[![Total Downloads](https://img.shields.io/packagist/dt/masoudi/number-plus.svg?style=flat)](https://packagist.org/packages/masoudi/number-plus)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?style=flat)](https://opensource.org/licenses/MIT)

## Number Plus - A advance number field

Number field with many option for customize number input

### install

```shell
composer require masoudi/number-plus
```

### How to use

```php
NumberPlus::make('Salary')
  ->options([
      "separator" => ',',
      "prefix" => '$ ',
      "suffix" => ' Yearly',
      "precision" => 2,
      "masked" => false,
  ]),
```

### Options

- `prefix`: A word, letter, or number placed before `value`
- `suffix`: A word, letter, or number placed after `value`
- `separator`: Character used as the thousands separator
- `decimal`: Character used to separate the integer part from the fractional part of a number
- `precision`: The precision property returns the number of bits of precision that can be represented.
- `minimumFractionDigits`: The minimum number of digits after the decimal separator.
- `prefill`: Set initial value before mount the component
- `reverseFill`: Fills string from the right side of the mask
- `masked`: Value will be masked (with contain separation characters)
- `min`: The min attribute specifies the minimum value for an input element.
- `nax`: The max attribute specifies the maximum value for an input element.
- `nullValue`: Value of input element is set to a default when no value present

### Hooks

`callAfterChanged`
Call a URL after exit input focus and you can display request response bottom of field
<br>
<br>
Example:

  ```php
NumberPlus::make('Price')
     ->callAfterChanged("https://domain.com/number-to-words.php", displayResponse: true),
  ```

<br>
<br>
<br>
