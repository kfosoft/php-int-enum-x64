<?php
namespace KFOSOFT\Domain\Enumeration;

use KFOSOFT\Domain\Enumeration\AbstractEnumeration;

/**
 * PHP/Mysql Integer Types (Exact Value) for x64 platforms.
 * @copyright (c) KFOSOFT <kfosoftware@gmail.com>
 */
class IntegerX64 extends AbstractEnumeration
{
    public const ZERO                   = 0;

    public const TINYINT_MIN            = -128;
    public const TINYINT_MAX            = 127;
    public const TINYINT_UNSIGNED_MIN   = self::ZERO;
    public const TINYINT_UNSIGNED_MAX   = 255;

    public const SMALLINT_MIN           = -32768;
    public const SMALLINT_MAX           = 32767;
    public const SMALLINT_UNSIGNED_MIN  = self::ZERO;
    public const SMALLINT_UNSIGNED_MAX  = 65535;

    public const MEDIUMINT_MIN          = -8388608;
    public const MEDIUMINT_MAX          = 8388607;
    public const MEDIUMINT_UNSIGNED_MIN = self::ZERO;
    public const MEDIUMINT_UNSIGNED_MAX = 16777215;

    public const INT_MIN                = -2147483648;
    public const INT_MAX                = 2147483647;
    public const INT_UNSIGNED_MIN       = self::ZERO;
    public const INT_UNSIGNED_MAX       = 4294967295;

    public const BIGINT_MIN             = -9223372036854775808;
    public const BIGINT_MAX             = 9223372036854775807;
    public const BIGINT_UNSIGNED_MIN    = self::ZERO;
    public const BIGINT_UNSIGNED_MAX    = 18446744073709551615;
}
