# Numberplate Converter

This library converts a number plate into its corresponding political district.

For example, the number plate ZE-AB123 will result in "Zell am See".

The library uses the namespace Perasser\Numberplate.

## How to Use

1. Load Composer.
2. Create a converter object.
3. Use the convert method to retrieve the political district.

## Code

```php
<?php
require 'vendor/autoload.php';

use Perasser\Numberplate\NumberplateConverter;

$np = 'TA-AB123';

$npConverter = new NumberplateConverter();
$city = $npConverter->convert($np);

echo $city;

```
