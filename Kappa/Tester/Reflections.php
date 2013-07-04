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

/**
 * Class Reflections
 * @package Kappa\Tester
 */
class Reflections
{
	/**
	 * @param object $obj
	 * @param string $method
	 * @param array $arguments
	 * @return mixed
	 * @throws InvalidArgumentException
	 */
	public function invokeMethod($obj, $method, array $arguments = array())
	{
		if (!is_object($obj)) {
			throw new InvalidArgumentException(__METHOD__ . " First argument must to be object, " . gettype($obj) . " given");
		}
		if (!is_string($method)) {
			throw new InvalidArgumentException(__METHOD__ . " Second argument must to be string, " . gettype($method) . " given");
		}
		$class = new \ReflectionClass($obj);
		$method = $class->getMethod($method);
		$method->setAccessible(true);
		return $method->invokeArgs($obj, $arguments);
	}

	/**
	 * @param object $obj
	 * @param string $property
	 * @return mixed
	 * @throws InvalidArgumentException
	 */
	public function invokeProperty($obj, $property)
	{
		if (!is_object($obj)) {
			throw new InvalidArgumentException(__METHOD__ . " First argument must to be object, " . gettype($obj) . " given");
		}
		if (!is_string($property)) {
			throw new InvalidArgumentException(__METHOD__ . " Second argument must to be string, " . gettype($property) . " given");
		}
		$attribute = new \ReflectionProperty($obj, $property);

		if (!$attribute || $attribute->isPublic())
			return $obj->$property;

		$attribute->setAccessible(true);
		$value = $attribute->getValue($obj);
		$attribute->setAccessible(false);
		return $value;
	}
}
