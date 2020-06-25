<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class CategoryMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = CategoryInterface::class;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return Category
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param Category $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(Category $dto, string $key, $value): void
    {
        switch ($key) {
            case "id":
                $dto->setId((string) $value);
                break;
            case "path":
                $dto->setPath((string) $value);
                break;
            case "position":
                $dto->setPosition((int) $value);
                break;
            case "level":
                $dto->setLevel((int) $value);
                break;
            case "children_count":
                $dto->setChildrenCount((int) $value);
                break;
            case "name":
                $dto->setName((string) $value);
                break;
            case "display_mode":
                $dto->setDisplayMode((string) $value);
                break;
            case "default_sort_by":
                $dto->setDefaultSortBy((string) $value);
                break;
            case "url_key":
                $dto->setUrlKey((string) $value);
                break;
            case "url_path":
                $dto->setUrlPath((string) $value);
                break;
            case "is_active":
                $dto->setIsActive((bool) $value);
                break;
            case "is_anchor":
                $dto->setIsAnchor((bool) $value);
                break;
            case "include_in_menu":
                $dto->setIncludeInMenu((bool) $value);
                break;
            case "available_sort_by":
                $dto->setAvailableSortBy((array) $value);
                break;
            case "breadcrumbs":
                $convertedArray = [];
                foreach ($value as $element) {
                    $convertedArray[] = $this->objectManager
                        ->create(\Magento\CatalogStorefrontApi\Api\Data\BreadcrumbMapper::class)
                        ->setData($element)
                        ->build();
                }
                $dto->setBreadcrumbs($convertedArray);
                break;
            case "description":
                $dto->setDescription((string) $value);
                break;
            case "canonical_url":
                $dto->setCanonicalUrl((string) $value);
                break;
            case "product_count":
                $dto->setProductCount((int) $value);
                break;
            case "children":
                $dto->setChildren((array) $value);
                break;
            case "image":
                $dto->setImage((string) $value);
                break;
            case "parent_id":
                $dto->setParentId((string) $value);
                break;
            case "meta_title":
                $dto->setMetaTitle((string) $value);
                break;
            case "meta_description":
                $dto->setMetaDescription((string) $value);
                break;
            case "meta_keywords":
                $dto->setMetaKeywords((string) $value);
                break;
            case "dynamic_attributes":
                $convertedArray = [];
                foreach ($value as $element) {
                    $convertedArray[] = $this->objectManager
                        ->create(\Magento\CatalogStorefrontApi\Api\Data\DynamicAttributeValueMapper::class)
                        ->setData($element)
                        ->build();
                }
                $dto->setDynamicAttributes($convertedArray);
                break;
        }
    }
}
