<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

interface OptionInterface
{

        /**
     * @return string
     */
    public function getId(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setId(string $value): void;

    /**
     * @return string
     */
    public function getType(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setType(string $value): void;

    /**
     * @return string
     */
    public function getName(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setName(string $value): void;

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\OptionValueInterface[]
     */
    public function getValues(): array;
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\OptionValueInterface[] $value
     * @return void
     */
    public function setValues(array $value): void;

    /**
     * @return bool
     */
    public function getAllowMulti(): bool;
    
    /**
     * @param bool $value
     * @return void
     */
    public function setAllowMulti(bool $value): void;
}
