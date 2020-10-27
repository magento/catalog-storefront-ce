<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api;

use \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataRequestInterface;
use \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataResponseInterface;
use \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataRequestInterface;
use \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataResponseInterface;
use \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataRequestInterface;
use \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataResponseInterface;
use \Magento\CatalogStorefrontApi\Proto\ImportRatingsMetadataRequest;
use \Magento\CatalogStorefrontApi\Proto\ImportRatingsMetadataResponse;
use \Magento\CatalogStorefrontApi\Proto\DeleteRatingsMetadataRequest;
use \Magento\CatalogStorefrontApi\Proto\DeleteRatingsMetadataResponse;
use \Magento\CatalogStorefrontApi\Proto\RatingsMetadataRequest;
use \Magento\CatalogStorefrontApi\Proto\RatingsMetadataResponse;
use \Magento\CatalogStorefrontApi\Proto\RatingsMetadataClient;

/**
 * Autogenerated description for RatingsMetadata class
 *
 * @SuppressWarnings(PHPMD)
 */
class RatingsMetadata implements RatingsMetadataInterface
{
    /**
     * @var RatingsMetadataClient
     */
    private $protoClient;

    /**
     * @param string $hostname
     * @param array $options
     * @param string|null $channel
     */
    public function __construct(
        string $hostname,
        array $options,
        ?string $channel = null
    ) {
        $this->protoClient = new RatingsMetadataClient($hostname, $options, $channel);
    }

    /**
     * @inheritdoc
     *
     * @param ImportRatingsMetadataRequestInterface $request
     * @return ImportRatingsMetadataResponseInterface
     * @throws \Throwable
     */
    public function ImportRatingsMetadata(ImportRatingsMetadataRequestInterface $request): ImportRatingsMetadataResponseInterface
    {
        $protoRequest = $this->ImportRatingsMetadataToProto($request);
        [$protoResult, $status] = $this->protoClient->ImportRatingsMetadata($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->ImportRatingsMetadataFromProto($protoResult);
    }

    /**
     * Autogenerated description for ImportRatingsMetadata method
     *
     * @param ImportRatingsMetadataRequestInterface $value
     * @return ImportRatingsMetadataRequest
     */
    private function ImportRatingsMetadataToProto(ImportRatingsMetadataRequestInterface $value): ImportRatingsMetadataRequest
    {
        // convert data from \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataRequest
        // to \Magento\CatalogStorefrontApi\Proto\ImportRatingsMetadataRequest
        /** @var \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\CatalogStorefrontApi\Proto\ImportRatingsMetadataRequest();
            $res = [];
            foreach ($value->getMetadata() as $item1) {
                // convert data from \Magento\CatalogStorefrontApi\Api\Data\RatingMetadata
                // to \Magento\CatalogStorefrontApi\Proto\RatingMetadata
                /** @var \Magento\CatalogStorefrontApi\Api\Data\RatingMetadata $item1 **/
                $p = function () use ($item1) {
                    $r = new \Magento\CatalogStorefrontApi\Proto\RatingMetadata();
                    $r->setRatingId($item1->getRatingId());
                    $r->setName($item1->getName());
                    $res = [];
                    foreach ($item1->getValues() as $item4) {
                        // convert data from \Magento\CatalogStorefrontApi\Api\Data\RatingValue
                        // to \Magento\CatalogStorefrontApi\Proto\RatingValue
                        /** @var \Magento\CatalogStorefrontApi\Api\Data\RatingValue $item4 **/
                        $p = function () use ($item4) {
                            $r = new \Magento\CatalogStorefrontApi\Proto\RatingValue();
                            $r->setValueId($item4->getValueId());
                            $r->setValue($item4->getValue());
                            $r->setPosition($item4->getPosition());
                            return $r;
                        };
                        $proto = $p();
                        $res[] = $proto;
                    }
                    $r->setValues($res);
                    return $r;
                };
                $proto = $p();
                $res[] = $proto;
            }
            $r->setMetadata($res);
            $r->setStore($value->getStore());
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for ImportRatingsMetadata method
     *
     * @param ImportRatingsMetadataResponse $value
     * @return ImportRatingsMetadataResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function ImportRatingsMetadataFromProto(ImportRatingsMetadataResponse $value): ImportRatingsMetadataResponseInterface
    {
        // convert data from \Magento\CatalogStorefrontApi\Proto\ImportRatingsMetadataResponse
        // to \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataResponse
        /** @var \Magento\CatalogStorefrontApi\Proto\ImportRatingsMetadataResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataResponse();
            $r->setStatus($value->getStatus());
            $r->setMessage($value->getMessage());
            return $r;
        };
        $out = $p();

        return $out;
    }

    /**
     * @inheritdoc
     *
     * @param DeleteRatingsMetadataRequestInterface $request
     * @return DeleteRatingsMetadataResponseInterface
     * @throws \Throwable
     */
    public function DeleteRatingsMetadata(DeleteRatingsMetadataRequestInterface $request): DeleteRatingsMetadataResponseInterface
    {
        $protoRequest = $this->DeleteRatingsMetadataToProto($request);
        [$protoResult, $status] = $this->protoClient->DeleteRatingsMetadata($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->DeleteRatingsMetadataFromProto($protoResult);
    }

    /**
     * Autogenerated description for DeleteRatingsMetadata method
     *
     * @param DeleteRatingsMetadataRequestInterface $value
     * @return DeleteRatingsMetadataRequest
     */
    private function DeleteRatingsMetadataToProto(DeleteRatingsMetadataRequestInterface $value): DeleteRatingsMetadataRequest
    {
        // convert data from \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataRequest
        // to \Magento\CatalogStorefrontApi\Proto\DeleteRatingsMetadataRequest
        /** @var \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\CatalogStorefrontApi\Proto\DeleteRatingsMetadataRequest();
            $values = [];
            foreach ($value->getRatingIds() as $newValue) {
                $values[] = $newValue;
            }
            $r->setRatingIds($values);
            $r->setStore($value->getStore());
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for DeleteRatingsMetadata method
     *
     * @param DeleteRatingsMetadataResponse $value
     * @return DeleteRatingsMetadataResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function DeleteRatingsMetadataFromProto(DeleteRatingsMetadataResponse $value): DeleteRatingsMetadataResponseInterface
    {
        // convert data from \Magento\CatalogStorefrontApi\Proto\DeleteRatingsMetadataResponse
        // to \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataResponse
        /** @var \Magento\CatalogStorefrontApi\Proto\DeleteRatingsMetadataResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataResponse();
            $r->setStatus($value->getStatus());
            $r->setMessage($value->getMessage());
            return $r;
        };
        $out = $p();

        return $out;
    }

    /**
     * @inheritdoc
     *
     * @param RatingsMetadataRequestInterface $request
     * @return RatingsMetadataResponseInterface
     * @throws \Throwable
     */
    public function GetRatingsMetadata(RatingsMetadataRequestInterface $request): RatingsMetadataResponseInterface
    {
        $protoRequest = $this->GetRatingsMetadataToProto($request);
        [$protoResult, $status] = $this->protoClient->GetRatingsMetadata($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->GetRatingsMetadataFromProto($protoResult);
    }

    /**
     * Autogenerated description for GetRatingsMetadata method
     *
     * @param RatingsMetadataRequestInterface $value
     * @return RatingsMetadataRequest
     */
    private function GetRatingsMetadataToProto(RatingsMetadataRequestInterface $value): RatingsMetadataRequest
    {
        // convert data from \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataRequest
        // to \Magento\CatalogStorefrontApi\Proto\RatingsMetadataRequest
        /** @var \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\CatalogStorefrontApi\Proto\RatingsMetadataRequest();
            $values = [];
            foreach ($value->getRatingIds() as $newValue) {
                $values[] = $newValue;
            }
            $r->setRatingIds($values);
            $r->setStore($value->getStore());
            $res = [];
            foreach ($value->getPagination() as $item3) {
                // convert data from \Magento\CatalogStorefrontApi\Api\Data\PaginationRequest
                // to \Magento\CatalogStorefrontApi\Proto\PaginationRequest
                /** @var \Magento\CatalogStorefrontApi\Api\Data\PaginationRequest $item3 **/
                $p = function () use ($item3) {
                    $r = new \Magento\CatalogStorefrontApi\Proto\PaginationRequest();
                    $r->setName($item3->getName());
                    $r->setValue($item3->getValue());
                    return $r;
                };
                $proto = $p();
                $res[] = $proto;
            }
            $r->setPagination($res);
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for GetRatingsMetadata method
     *
     * @param RatingsMetadataResponse $value
     * @return RatingsMetadataResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function GetRatingsMetadataFromProto(RatingsMetadataResponse $value): RatingsMetadataResponseInterface
    {
        // convert data from \Magento\CatalogStorefrontApi\Proto\RatingsMetadataResponse
        // to \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataResponse
        /** @var \Magento\CatalogStorefrontApi\Proto\RatingsMetadataResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataResponse();
            $res = [];
            foreach ($value->getItems() as $item1) {
                // convert data from \Magento\CatalogStorefrontApi\Proto\RatingMetadata
                // to \Magento\CatalogStorefrontApi\Api\Data\RatingMetadata
                /** @var \Magento\CatalogStorefrontApi\Proto\RatingMetadata $item1 **/
                $p = function () use ($item1) {
                    $r = new \Magento\CatalogStorefrontApi\Api\Data\RatingMetadata();
                    $r->setRatingId($item1->getRatingId());
                    $r->setName($item1->getName());
                    $res = [];
                    foreach ($item1->getValues() as $item4) {
                        // convert data from \Magento\CatalogStorefrontApi\Proto\RatingValue
                        // to \Magento\CatalogStorefrontApi\Api\Data\RatingValue
                        /** @var \Magento\CatalogStorefrontApi\Proto\RatingValue $item4 **/
                        $p = function () use ($item4) {
                            $r = new \Magento\CatalogStorefrontApi\Api\Data\RatingValue();
                            $r->setValueId($item4->getValueId());
                            $r->setValue($item4->getValue());
                            $r->setPosition($item4->getPosition());
                            return $r;
                        };
                        $out = $p();
                        $res[] = $out;
                    }
                    $r->setValues($res);
                    return $r;
                };
                $out = $p();
                $res[] = $out;
            }
            $r->setItems($res);
            $prop2 = $value->getPagination();
            if ($prop2 !== null) {
                // convert data from \Magento\CatalogStorefrontApi\Proto\PaginationResponse
                // to \Magento\CatalogStorefrontApi\Api\Data\PaginationResponse
                /** @var \Magento\CatalogStorefrontApi\Proto\PaginationResponse $prop2 **/
                $p = function () use ($prop2) {
                    $r = new \Magento\CatalogStorefrontApi\Api\Data\PaginationResponse();
                    $r->setPageSize($prop2->getPageSize());
                    $r->setCurrentPage($prop2->getCurrentPage());
                    $r->setTotalPages($prop2->getTotalPages());
                    return $r;
                };
                $out = $p();
                $r->setPagination($out);
            }
            return $r;
        };
        $out = $p();

        return $out;
    }
}
