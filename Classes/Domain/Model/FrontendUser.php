<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Sebastian Fischer <typo3@marketing-factory.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * An extended frontend user with more attributes
 */
class Tx_EwSfregisterExtended_Domain_Model_FrontendUser extends Tx_SfRegister_Domain_Model_FrontendUser {
	/**
	 * @var array
	 */
	protected $preferedBrand = array();

	/**
	 * Getter
	 *
	 * @return array
	 */
	public function getPreferedBrand() {
		return $this->preferedBrand;
	}

	/**
	 * Setter
	 *
	 * @param array $preferedBrand
	 * @return void
	 */
	public function setPreferedBrand($preferedBrand) {
		$this->preferedBrand = $preferedBrand;
	}
}

?>