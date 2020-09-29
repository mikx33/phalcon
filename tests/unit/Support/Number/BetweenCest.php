<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Unit\Support\Number;

use Phalcon\Support\Number\Between;
use UnitTester;

class BetweenCest
{
    /**
     * Tests Phalcon\Support\Number :: between()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2020-09-09
     */
    public function supportNumberBetween(UnitTester $I)
    {
        $I->wantToTest('Support\Number - between()');

        $object = new Between();
        $actual = $object(5, 1, 10);
        $I->assertTrue($actual);

        $actual = $object(1, 1, 10);
        $I->assertTrue($actual);

        $actual = $object(10, 1, 10);
        $I->assertTrue($actual);

        $actual = $object(1, 5, 10);
        $I->assertFalse($actual);
    }
}
