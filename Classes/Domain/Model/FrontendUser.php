<?php

namespace Evoweb\EwRegisterExtended\Domain\Model;

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
class FrontendUser extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{
    /**
     * @var string
     */
    protected $custom0 = '';

    /**
     * @var string
     */
    protected $custom1 = '';

    /**
     * @var string
     */
    protected $custom2 = '';

    /**
     * @var string
     */
    protected $custom3 = '';

    /**
     * @var string
     */
    protected $custom4 = '';

    /**
     * @var string
     */
    protected $custom5 = '';

    /**
     * @var string
     */
    protected $custom6 = '';

    /**
     * @var string
     */
    protected $custom7 = '';

    /**
     * @var string
     */
    protected $custom8 = '';

    /**
     * @var string
     */
    protected $custom9 = '';

    /**
     * Setter
     *
     * @param string $custom0
     * @return void
     */
    public function setCustom0($custom0)
    {
        $this->custom0 = $custom0;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom0()
    {
        return $this->custom0;
    }

    /**
     * Setter
     *
     * @param string $custom1
     * @return void
     */
    public function setCustom1($custom1)
    {
        $this->custom1 = $custom1;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * Setter
     *
     * @param string $custom2
     * @return void
     */
    public function setCustom2($custom2)
    {
        $this->custom2 = $custom2;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * Setter
     *
     * @param string $custom3
     * @return void
     */
    public function setCustom3($custom3)
    {
        $this->custom3 = $custom3;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom3;
    }

    /**
     * Setter
     *
     * @param string $custom4
     * @return void
     */
    public function setCustom4($custom4)
    {
        $this->custom4 = $custom4;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom4()
    {
        return $this->custom4;
    }

    /**
     * Setter
     *
     * @param string $custom5
     * @return void
     */
    public function setCustom5($custom5)
    {
        $this->custom5 = $custom5;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom5()
    {
        return $this->custom5;
    }

    /**
     * Setter
     *
     * @param string $custom6
     * @return void
     */
    public function setCustom6($custom6)
    {
        $this->custom6 = $custom6;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom6()
    {
        return $this->custom6;
    }

    /**
     * Setter
     *
     * @param string $custom7
     * @return void
     */
    public function setCustom7($custom7)
    {
        $this->custom7 = $custom7;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom7()
    {
        return $this->custom7;
    }

    /**
     * Setter
     *
     * @param string $custom8
     * @return void
     */
    public function setCustom8($custom8)
    {
        $this->custom8 = $custom8;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom8()
    {
        return $this->custom8;
    }

    /**
     * Setter
     *
     * @param string $custom9
     * @return void
     */
    public function setCustom9($custom9)
    {
        $this->custom9 = $custom9;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getCustom9()
    {
        return $this->custom9;
    }
}
