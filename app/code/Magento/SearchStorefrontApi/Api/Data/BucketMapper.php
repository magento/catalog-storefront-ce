<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\SearchStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for Bucket class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class BucketMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = BucketInterface::class;

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
    * @return Bucket
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            if ($valueData === null) {
                continue;
            }
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
    * @param Bucket $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(Bucket $dto, string $key, $value): void
    {
        switch ($key) {
            case "attribute":
                $dto->setAttribute((string) $value);
                break;
            case "label":
                $dto->setLabel((string) $value);
                break;
            case "count":
                $dto->setCount((int) $value);
                break;
            case "options":
                $convertedArray = [];
                foreach ($value as $element) {
                    $convertedArray[] = $this->objectManager
                        ->create(\Magento\SearchStorefrontApi\Api\Data\OptionMapper::class)
                        ->setData($element)
                        ->build();
                }
                $dto->setOptions($convertedArray);
                break;
        }
    }
}