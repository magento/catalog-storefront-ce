<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\CatalogMessageBroker\Model;

use Magento\CatalogExportApi\Api\CategoryRepositoryInterface;
use Magento\CatalogExportApi\Api\Data\Category;
use Magento\Framework\Reflection\DataObjectProcessor;

/**
 * @inheritdoc
 */
class FetchCategories implements FetchCategoriesInterface
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var DataObjectProcessor
     */
    private $dataObjectProcessor;

    /**
     * @param CategoryRepositoryInterface $categoryRepository
     * @param DataObjectProcessor $dataObjectProcessor
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        DataObjectProcessor $dataObjectProcessor
    ) {
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @inheritdoc
     */
    public function execute(array $ids)
    {
        $data = [];
        $categories = $this->categoryRepository->get($ids);
        foreach ($categories as $category) {
            $data[] = $this->dataObjectProcessor->buildOutputDataArray($category, Category::class);
        }
        return $data;
    }
}