<?php
/**
 * TestCaseTest.phpt
 *
 * @author Ondřej Záruba <zarubaondra@gmail.com>
 * @date 7.5.13
 *
 * @package Kappa\Tester
 */
 
namespace Kappa\Tests\Tester\TestCase;

use Kappa\Tester\Reflections;
use Kappa\Tester\TestCase;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class TestCaseTest extends TestCase
{
	public function testGetReflection()
	{
		Assert::true($this->getReflection() instanceof Reflections);
	}
}
\run(new TestCaseTest());