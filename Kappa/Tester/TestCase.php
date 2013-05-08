<?php
/**
 * TestCase.php
 *
 * @author Ondřej Záruba <zarubaondra@gmail.com>
 * @date 4.2.13
 *
 * @package Kappa\Tester
 */

namespace Kappa\Tester;

/**
 * Class TestCase
 *
 * @package Kappa\Tester
 */
class TestCase extends \Tester\TestCase
{
	/**
	 * @return Reflections
	 */
	public function getReflection()
	{
		return new Reflections();
	}
}
