<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Copyright © Magento, Inc. All rights reserved.
// See COPYING.txt for license details.
namespace Magento\CatalogStorefrontApi\Proto;

/**
 */
class CatalogClient extends \Grpc\BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Magento\CatalogStorefrontApi\Proto\ProductsGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getProducts(
        \Magento\CatalogStorefrontApi\Proto\ProductsGetRequest $argument,
        $metadata = [],
        $options = []
    )
    {
        return $this->_simpleRequest(
            '/magento.catalogStorefrontApi.proto.Catalog/getProducts',
            $argument,
            ['\Magento\CatalogStorefrontApi\Proto\ProductsGetResult', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param \Magento\CatalogStorefrontApi\Proto\ImportProductsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function importProducts(
        \Magento\CatalogStorefrontApi\Proto\ImportProductsRequest $argument,
        $metadata = [],
        $options = []
    )
    {
        return $this->_simpleRequest(
            '/magento.catalogStorefrontApi.proto.Catalog/importProducts',
            $argument,
            ['\Magento\CatalogStorefrontApi\Proto\ImportProductsResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param \Magento\CatalogStorefrontApi\Proto\DeleteProductsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteProducts(
        \Magento\CatalogStorefrontApi\Proto\DeleteProductsRequest $argument,
        $metadata = [],
        $options = []
    )
    {
        return $this->_simpleRequest(
            '/magento.catalogStorefrontApi.proto.Catalog/deleteProducts',
            $argument,
            ['\Magento\CatalogStorefrontApi\Proto\DeleteProductsResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param \Magento\CatalogStorefrontApi\Proto\ImportCategoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function importCategories(
        \Magento\CatalogStorefrontApi\Proto\ImportCategoriesRequest $argument,
        $metadata = [],
        $options = []
    )
    {
        return $this->_simpleRequest(
            '/magento.catalogStorefrontApi.proto.Catalog/importCategories',
            $argument,
            ['\Magento\CatalogStorefrontApi\Proto\ImportCategoriesResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param \Magento\CatalogStorefrontApi\Proto\CategoriesGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getCategories(
        \Magento\CatalogStorefrontApi\Proto\CategoriesGetRequest $argument,
        $metadata = [],
        $options = []
    )
    {
        return $this->_simpleRequest(
            '/magento.catalogStorefrontApi.proto.Catalog/getCategories',
            $argument,
            ['\Magento\CatalogStorefrontApi\Proto\CategoriesGetResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param \Magento\CatalogStorefrontApi\Proto\ProductVariantsGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getProductVariants(
        \Magento\CatalogStorefrontApi\Proto\ProductVariantsGetRequest $argument,
        $metadata = [],
        $options = []
    )
    {
        return $this->_simpleRequest(
            '/magento.catalogStorefrontApi.proto.Catalog/getProductVariants',
            $argument,
            ['\Magento\CatalogStorefrontApi\Proto\ProductVariantsGetResponse', 'decode'],
            $metadata,
            $options
        );
    }
}
