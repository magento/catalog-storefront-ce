<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

final class Adjustment implements AdjustmentInterface
{
    /**
     * @var string
     */
    private $code;
    /**
     * @var float
     */
    private $amount;


    /**
     * @return string
     */
    public function getCode(): string
    {
        return (string) $this->code;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setCode(string $value): void
    {
        $this->code = $value;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return (float) $this->amount;
    }
    
    /**
     * @param float $value
     * @return void
     */
    public function setAmount(float $value): void
    {
        $this->amount = $value;
    }
}
