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
 * Autogenerated description for PaginationRequest class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class PaginationRequestArrayMapper
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
    * @param PaginationRequest $dto
    * @return array
    */
    public function convertToArray(PaginationRequest $dto)
    {
        $result = [];
        $result["name"] = $dto->getName();
        $result["value"] = $dto->getValue();
        return $result;
    }
}
