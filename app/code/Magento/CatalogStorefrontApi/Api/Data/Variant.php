<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

final class Variant implements VariantInterface
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $sku;
    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\PriceInterface
     */
    private $minimumPrice;
    /**
     * @var bool
     */
    private $buyable;
    /**
     * @var bool
     */
    private $inStock;
    /**
     * @var bool
     */
    private $lowStock;
    /**
     * @var array
     */
    private $selections;


    /**
     * @return string
     */
    public function getId(): string
    {
        return (string) $this->id;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setId(string $value): void
    {
        $this->id = $value;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return (string) $this->sku;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void
    {
        $this->sku = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\PriceInterface|null
     */
    public function getMinimumPrice(): ?\Magento\CatalogStorefrontApi\Api\Data\PriceInterface
    {
        return $this->minimumPrice;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\PriceInterface $value
     * @return void
     */
    public function setMinimumPrice(\Magento\CatalogStorefrontApi\Api\Data\PriceInterface $value): void
    {
        $this->minimumPrice = $value;
    }

    /**
     * @return bool
     */
    public function getBuyable(): bool
    {
        return (bool) $this->buyable;
    }
    
    /**
     * @param bool $value
     * @return void
     */
    public function setBuyable(bool $value): void
    {
        $this->buyable = $value;
    }

    /**
     * @return bool
     */
    public function getInStock(): bool
    {
        return (bool) $this->inStock;
    }
    
    /**
     * @param bool $value
     * @return void
     */
    public function setInStock(bool $value): void
    {
        $this->inStock = $value;
    }

    /**
     * @return bool
     */
    public function getLowStock(): bool
    {
        return (bool) $this->lowStock;
    }
    
    /**
     * @param bool $value
     * @return void
     */
    public function setLowStock(bool $value): void
    {
        $this->lowStock = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\SingleValueAttributeInterface[]
     */
    public function getSelections(): array
    {
        return (array) $this->selections;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\SingleValueAttributeInterface[] $value
     * @return void
     */
    public function setSelections(array $value): void
    {
        $this->selections = $value;
    }
}
