<?php
/**
 * This file is part of the kappa-tester package.
 *
 * (c) Ondřej Záruba <zarubaondra@gmail.com>
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 * 
 * @testCase
 */

namespace Kappa\Tests\Tester;

use Kappa\Tester\Helpers;
use Kappa\Tester\TestCase;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class HelpersTest extends TestCase
{
	public function testGetRandName()
	{
		for ($i = 0; $i < 10; $i++) {
			Assert::notSame(Helpers::getRandName(), Helpers::getRandName());
		}
		Assert::throws(function() {
			Helpers::getRandName(array());
		}, 'Kappa\Tester\InvalidArgumentException');
		Assert::throws(function() {
			Helpers::getRandName('', array());
		}, 'Kappa\Tester\InvalidArgumentException');
	}
}

\run(new HelpersTest());