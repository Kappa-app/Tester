<?php
/**
 * Helpers.php
 *
 * @author Ondřej Záruba <zarubaondra@gmail.com>
 * @date 7.5.13
 *
 * @package Kappa\Tester
 */

namespace Kappa\Tester;

/**
 * Class Helpers
 *
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
