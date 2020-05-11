<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

interface ImportProductsRequestInterface
{

        /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductInterface[]
     */
    public function getProducts(): array;
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductInterface[] $value
     * @return void
     */
    public function setProducts(array $value): void;

    /**
     * @return string
     */
    public function getStore(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setStore(string $value): void;

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface|null
     */
    public function getParams(): ?\Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface;
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface $value
     * @return void
     */
    public function setParams(\Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface $value): void;
}
