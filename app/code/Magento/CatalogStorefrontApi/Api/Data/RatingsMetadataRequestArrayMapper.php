<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for RatingsMetadataRequest class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class RatingsMetadataRequestArrayMapper
{
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
    * Convert the DTO to the array with the data
    *
    * @param RatingsMetadataRequest $dto
    * @return array
    */
    public function convertToArray(RatingsMetadataRequest $dto)
    {
        $result = [];
        $result["rating_ids"] = $dto->getRatingIds();
        $result["store"] = $dto->getStore();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getPagination() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\PaginationRequestArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["pagination"] = $fieldArray;
        return $result;
    }
}
