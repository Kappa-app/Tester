<?php
/**
 * HelpersTest.phpt
 *
 * @author Ondřej Záruba <zarubaondra@gmail.com>
 * @date 7.5.13
 *
 * @package Kappa
 */
 
namespace Kappa\Tests\Tester\Helpers;

use Kappa\Tester\TestCase;
use Kappa\Tester\Helpers;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class HelpersTest extends TestCase
{
	private $exceptions = array(
		'inv' => '\Kappa\Tester\InvalidArgumentException',
	);

        public function testRepairPathSeparators()
        {
	        $path = "D:" . DIRECTORY_SEPARATOR . "some" . DIRECTORY_SEPARATOR . "path";
        	Assert::same($path, Helpers::repairPathSeparators("D:/some/path"));
	        Assert::throws(function () {
		        Helpers::repairPathSeparators(array('some'));
	        }, $this->exceptions['inv']);
        }
}
\run(new HelpersTest());