<?php
/**
 * This file is part of the Kappa\Tester package.
 *
 * (c) Ondřej Záruba <zarubaondra@gmail.com>
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 *
 * @testCase
 */

namespace Kappa\Tests\Tester\TestCase;

use Kappa\Tester\Reflections;
use Kappa\Tester\TestCase;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

/**
 * Class TestCaseTest
 * @package Kappa\Tests\Tester\TestCase
 */
class TestCaseTest extends TestCase
{
	public function testGetReflection()
	{
		Assert::true($this->getReflection() instanceof Reflections);
	}
}

\run(new TestCaseTest());