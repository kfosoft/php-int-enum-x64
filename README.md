# PHP/Mysql Integer Types (Exact Value) for x64 platforms
## Installation

Installation with Composer

Either run
~~~
    php composer.phar require --prefer-dist kfosoft/php-int-enum-x64:"*"
~~~
or add in composer.json
~~~
    "require": {
            ...
            "kfosoft/php-int-enum-x64":"*"
    }
~~~

## Types
~~~
<?php
namespace kfosoft\enums;

use kfosoft\base\Enum;

class IntegerX64 extends Enum
{
    const ZERO = 0;

    const TINYINT_MIN = -128;
    const TINYINT_MAX = 127;
    const TINYINT_UNSIGNED_MIN = self::ZERO;
    const TINYINT_UNSIGNED_MAX = 255;

    const SMALLINT_MIN = -32768;
    const SMALLINT_MAX = 32767;
    const SMALLINT_UNSIGNED_MIN = self::ZERO;
    const SMALLINT_UNSIGNED_MAX = 65535;

    const MEDIUMINT_MIN = -8388608;
    const MEDIUMINT_MAX = 8388607;
    const MEDIUMINT_UNSIGNED_MIN = self::ZERO;
    const MEDIUMINT_UNSIGNED_MAX = 16777215;

    const INT_MIN = -2147483648;
    const INT_MAX = 2147483647;
    const INT_UNSIGNED_MIN = self::ZERO;
    const INT_UNSIGNED_MAX = 4294967295;

    const BIGINT_MIN = -9223372036854775808;
    const BIGINT_MAX = 9223372036854775807;
    const BIGINT_UNSIGNED_MIN = self::ZERO;
    const BIGINT_UNSIGNED_MAX = 18446744073709551615;


    /**
     * @inheritdoc
     */
    public static function listData()
    {
        return [];
    }
}
~~~

Enjoy, guys!
