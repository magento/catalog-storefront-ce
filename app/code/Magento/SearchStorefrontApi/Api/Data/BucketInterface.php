<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\SearchStorefrontApi\Api\Data;

/**
 * Autogenerated description for Bucket interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface BucketInterface
{
    /**
     * Autogenerated description for getAttribute() interface method
     *
     * @return string
     */
    public function getAttribute(): string;

    /**
     * Autogenerated description for setAttribute() interface method
     *
     * @param string $value
     * @return void
     */
    public function setAttribute(string $value): void;

    /**
     * Autogenerated description for getLabel() interface method
     *
     * @return string
     */
    public function getLabel(): string;

    /**
     * Autogenerated description for setLabel() interface method
     *
     * @param string $value
     * @return void
     */
    public function setLabel(string $value): void;

    /**
     * Autogenerated description for getCount() interface method
     *
     * @return int
     */
    public function getCount(): int;

    /**
     * Autogenerated description for setCount() interface method
     *
     * @param int $value
     * @return void
     */
    public function setCount(int $value): void;

    /**
     * Autogenerated description for getOptions() interface method
     *
     * @return \Magento\SearchStorefrontApi\Api\Data\BucketOptionInterface[]
     */
    public function getOptions(): array;

    /**
     * Autogenerated description for setOptions() interface method
     *
     * @param \Magento\SearchStorefrontApi\Api\Data\BucketOptionInterface[] $value
     * @return void
     */
    public function setOptions(array $value): void;
}
