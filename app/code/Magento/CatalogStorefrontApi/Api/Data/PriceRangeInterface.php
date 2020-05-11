<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

interface PriceRangeInterface
{

        /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\PriceInterface|null
     */
    public function getMinimumPrice(): ?\Magento\CatalogStorefrontApi\Api\Data\PriceInterface;
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\PriceInterface $value
     * @return void
     */
    public function setMinimumPrice(\Magento\CatalogStorefrontApi\Api\Data\PriceInterface $value): void;

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\PriceInterface|null
     */
    public function getMaximumPrice(): ?\Magento\CatalogStorefrontApi\Api\Data\PriceInterface;
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\PriceInterface $value
     * @return void
     */
    public function setMaximumPrice(\Magento\CatalogStorefrontApi\Api\Data\PriceInterface $value): void;
}
