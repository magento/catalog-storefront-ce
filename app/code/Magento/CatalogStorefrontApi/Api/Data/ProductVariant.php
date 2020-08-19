<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductVariant class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
final class ProductVariant implements ProductVariantInterface
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $optionValueId;

    /**
     * @var array
     */
    private $price;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getId(): string
    {
        return (string) $this->id;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setId(string $value): void
    {
        $this->id = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getOptionValueId(): array
    {
        return (array) $this->optionValueId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setOptionValueId(array $value): void
    {
        $this->optionValueId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\PriceInterface[]
     */
    public function getPrice(): array
    {
        return (array) $this->price;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\PriceInterface[] $value
     * @return void
     */
    public function setPrice(array $value): void
    {
        $this->price = $value;
    }
}
