<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class VideoArrayMapper
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
    * @param Video $dto
    * @return array
    */
    public function convertToArray(Video $dto)
    {
        $result = [];
        $result["video_provider"] = $dto->getVideoProvider();
        $result["video_url"] = $dto->getVideoUrl();
        $result["video_title"] = $dto->getVideoTitle();
        $result["video_description"] = $dto->getVideoDescription();
        $result["video_metadata"] = $dto->getVideoMetadata();
        $result["media_type"] = $dto->getMediaType();
        return $result;
    }
}
