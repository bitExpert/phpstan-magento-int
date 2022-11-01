<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Helper;

/**
 * Test Extension attributes
 */
class TestExtAttributes
{
    public function __construct(
        \Magento\Catalog\Api\Data\ProductInterface $product,
        \Magento\InventoryApi\Api\Data\StockInterface $stock
    )
    {
        /** @var \Magento\Catalog\Api\Data\ProductExtensionInterface $productExt */
        $productExt = $product->getExtensionAttributes();
        /** @var \Magento\InventoryApi\Api\Data\StockExtensionInterface $stockExt */
        $stockExt = $stock->getExtensionAttributes();

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
