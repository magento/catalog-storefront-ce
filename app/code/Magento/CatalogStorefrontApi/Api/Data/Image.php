<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

final class Image implements ImageInterface
{
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $label;


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return (string) $this->url;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setUrl(string $value): void
    {
        $this->url = $value;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return (string) $this->label;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setLabel(string $value): void
    {
        $this->label = $value;
    }
}
