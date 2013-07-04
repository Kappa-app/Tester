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
 * Class TestCase
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
