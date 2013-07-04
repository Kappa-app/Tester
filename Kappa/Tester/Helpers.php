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
 * Class Helpers
 * @package Kappa\Tester
 */
class Helpers
{
	/**
	 * @param string $path
	 * @return string
	 * @throws InvalidArgumentException
	 */
	public static function repairPathSeparators($path)
	{
		if (!is_string($path))
			throw new InvalidArgumentException(__METHOD__ . " Argument must to be string, " . gettype($path) . " given");
		$patterns = array('\\', '/');
		return (string)str_replace($patterns, DIRECTORY_SEPARATOR, $path);
	}
}
