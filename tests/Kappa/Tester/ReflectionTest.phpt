<?php
/**
 * ReflectionTest.phpt
 *
 * @author Ondřej Záruba <zarubaondra@gmail.com>
 * @date 7.5.13
 *
 * @package Kappa
 */
 
namespace Kappa\Tests\Tester\Reflections;

use Kappa\Tester\TestCase;
use Kappa\Tester\Reflections;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class ReflectionTest extends TestCase
{
	/** @var array  */
	private $exception = array(
		'inv' => '\Kappa\Tester\InvalidArgumentException',
	);

	/** @var string  */
	private $forTest = "private property";

	public function testInvokeMethod()
	{
		$reflection = new Reflections();
		Assert::same("private method", $this->getReflection()->invokeMethod($this, 'forTest'));
		Assert::same("private property", $this->getReflection()->invokeProperty($this, 'forTest'));
		Assert::throws(function () use($reflection) {
			$reflection->invokeProperty(array(), 'string');
		}, $this->exception['inv']);
		Assert::throws(function () use($reflection) {
			$reflection->invokeProperty("string", 'string');
		}, $this->exception['inv']);
		Assert::throws(function () use($reflection) {
			$reflection->invokeProperty(new \stdClass(), array());
		}, $this->exception['inv']);
		Assert::throws(function () use($reflection) {
			$reflection->invokeMethod(array(), 'string');
		}, $this->exception['inv']);
		Assert::throws(function () use($reflection) {
			$reflection->invokeMethod("string", 'string');
		}, $this->exception['inv']);
		Assert::throws(function () use($reflection) {
			$reflection->invokeMethod(new \stdClass(), array());
		}, $this->exception['inv']);
	}

	/**
	 * @return string
	 */
	private function forTest()
	{
		return "private method";
	}
}

\run(new ReflectionTest());