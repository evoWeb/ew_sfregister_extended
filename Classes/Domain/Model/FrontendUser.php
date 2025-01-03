<?php

declare(strict_types=1);

/*
 * This file is developed by evoWeb.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Evoweb\EwRegisterExtended\Domain\Model;

use Evoweb\SfRegister\Domain\Model\FrontendUser as BaseFrontendUser;

/**
 * An extended frontend user with more attributes
 */
class FrontendUser extends BaseFrontendUser
{
    protected string $custom0 = '';

    protected string $custom1 = '';

    protected string $custom2 = '';

    protected string $custom3 = '';

    protected string $custom4 = '';

    protected string $custom5 = '';

    protected string $custom6 = '';

    protected string $custom7 = '';

    protected string $custom8 = '';

    /**
     * @var string
     */
    protected $custom9 = '';

    public function setCustom0(string $custom0): void
    {
        $this->custom0 = $custom0;
    }

    public function getCustom0(): string
    {
        return $this->custom0;
    }

    public function setCustom1(string $custom1): void
    {
        $this->custom1 = $custom1;
    }

    public function getCustom1(): string
    {
        return $this->custom1;
    }

    public function setCustom2(string $custom2): void
    {
        $this->custom2 = $custom2;
    }

    public function getCustom2(): string
    {
        return $this->custom2;
    }

    public function setCustom3(string $custom3): void
    {
        $this->custom3 = $custom3;
    }

    public function getCustom3(): string
    {
        return $this->custom3;
    }

    public function setCustom4(string $custom4): void
    {
        $this->custom4 = $custom4;
    }

    public function getCustom4(): string
    {
        return $this->custom4;
    }

    public function setCustom5(string $custom5): void
    {
        $this->custom5 = $custom5;
    }

    public function getCustom5(): string
    {
        return $this->custom5;
    }

    public function setCustom6(string $custom6): void
    {
        $this->custom6 = $custom6;
    }

    public function getCustom6(): string
    {
        return $this->custom6;
    }

    public function setCustom7(string $custom7): void
    {
        $this->custom7 = $custom7;
    }

    public function getCustom7(): string
    {
        return $this->custom7;
    }

    public function setCustom8(string $custom8): void
    {
        $this->custom8 = $custom8;
    }

    public function getCustom8(): string
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
