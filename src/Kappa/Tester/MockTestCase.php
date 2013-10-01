<?php
/**
 * This file is part of the Kappa\Tester package.
 *
 * (c) Ondřej Záruba <zarubaondra@gmail.com>
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */

namespace Kappa\Tester;

use Mockista\Registry;

/**
 * Class TestCase
 * @package Kappa\Tester
 */
abstract class MockTestCase extends TestCase
{
	/** @var \Mockista\Registry */
	protected $mockista;

	protected function setUp()
	{
		if (!class_exists('\Mockista\Registry')) {
			throw new InvalidStateException("Package janmarek/mockista has not been found!");
		}
		$this->mockista = new Registry();
	}

	protected function tearDown()
	{
		$this->mockista->assertExpectations();
	}
}
