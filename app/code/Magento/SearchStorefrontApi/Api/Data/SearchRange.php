<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\SearchStorefrontApi\Api\Data;

/**
 * Autogenerated description for SearchRange class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class SearchRange implements SearchRangeInterface
{

    /**
     * @var float
     */
    private $from;

    /**
     * @var float
     */
    private $to;
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getFrom(): float
    {
        return (float) $this->from;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setFrom(float $value): void
    {
        $this->from = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getTo(): float
    {
        return (float) $this->to;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setTo(float $value): void
    {
        $this->to = $value;
    }
}