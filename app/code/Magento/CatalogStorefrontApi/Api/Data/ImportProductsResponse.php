<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

final class ImportProductsResponse implements ImportProductsResponseInterface
{
    /**
     * @var array
     */
    private $data;


    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductInterface[]
     */
    public function getData(): array
    {
        return (array) $this->data;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductInterface[] $value
     * @return void
     */
    public function setData(array $value): void
    {
        $this->data = $value;
    }
}
