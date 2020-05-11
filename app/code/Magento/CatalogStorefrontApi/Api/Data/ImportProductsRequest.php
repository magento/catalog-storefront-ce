<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

final class ImportProductsRequest implements ImportProductsRequestInterface
{
    /**
     * @var array
     */
    private $products;
    /**
     * @var string
     */
    private $store;
    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface
     */
    private $params;


    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductInterface[]
     */
    public function getProducts(): array
    {
        return (array) $this->products;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductInterface[] $value
     * @return void
     */
    public function setProducts(array $value): void
    {
        $this->products = $value;
    }

    /**
     * @return string
     */
    public function getStore(): string
    {
        return (string) $this->store;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setStore(string $value): void
    {
        $this->store = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface|null
     */
    public function getParams(): ?\Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface
    {
        return $this->params;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface $value
     * @return void
     */
    public function setParams(\Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface $value): void
    {
        $this->params = $value;
    }
}
