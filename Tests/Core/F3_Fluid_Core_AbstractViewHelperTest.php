<?php
declare(ENCODING = 'utf-8');
namespace F3::Fluid::Core;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

require_once(__DIR__ . '/Fixtures/F3_Fluid_TestViewHelper.php');

/**
 * @package Fluid
 * @subpackage Tests
 * @version $Id:$
 */
/**
 * Testcase for AbstractViewHelper
 *
 * @package
 * @subpackage Tests
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class AbstractViewHelperTest extends F3::Testing::BaseTestCase {
	/**
	 * @test
	 * @author Sebastian Kurfürst <sebastian@typo3.org>
	 */
	public function registeredArgumentsAreReturnedCorrectly() {
		$name = "This is a name";
		$description = "Example desc";
		$type = "string";
		$isOptional = TRUE;
		$expected = new F3::Fluid::Core::ArgumentDefinition($name, $type, $description, $isOptional);
		
		$viewHelper = new F3::Fluid::TestViewHelper($name, $type, $description, $isOptional);
		$viewHelper->initializeArguments();
		$this->assertEquals($viewHelper->getArgumentDefinitions(), array($expected), 'Argument definitions not returned correctly.');
	}
}



?>