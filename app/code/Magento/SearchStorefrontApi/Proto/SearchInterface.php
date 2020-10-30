<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: search.proto

namespace Magento\SearchStorefrontApi\Proto;

use Spiral\GRPC;

interface SearchInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "magento.searchStorefrontApi.proto.Search";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ProductSearchRequest $in
    * @return ProductsSearchResult
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function searchProducts(GRPC\ContextInterface $ctx, ProductSearchRequest $in): ProductsSearchResult;
}
