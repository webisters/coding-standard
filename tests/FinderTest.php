<?php
/*
 * This file is part of Webisters Coding Standard Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\CodingStandard;

use Framework\CodingStandard\Finder;
use PHPUnit\Framework\TestCase;

final class FinderTest extends TestCase
{
    public function testInstance() : void
    {
        self::assertInstanceOf(Finder::class, Finder::create());
    }
}
