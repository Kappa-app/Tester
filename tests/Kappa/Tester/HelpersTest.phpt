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