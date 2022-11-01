<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Helper;

/**
 * Test Extension attributes
 */
class TestExtAttributes
{
    public function __construct(
        \Magento\Catalog\Api\Data\ProductExtension $productExt,
        \Magento\InventoryApi\Api\Data\StockExtension $stockExt
    )
    {
        // access extension attributes defined in extension_attributes.xml in the module
        $productExt->setAdditionalName('Additional name');
        $name = $productExt->getAdditionalName();
        $productExt->setAdditionalId(99);
        $id = $productExt->getAdditionalId();

        $stockExt->setSalesChannels(null);
        $channels = $stockExt->getSalesChannels();

        // access extension attribute defined in Magento_CatalogInventory
        $stockItem = $productExt->getStockItem();
    }
}
