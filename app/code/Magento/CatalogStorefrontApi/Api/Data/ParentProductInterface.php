<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

interface ParentProductInterface
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
    public function getSku(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void;

    /**
     * @return string
     */
    public function getType(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setType(string $value): void;
}
