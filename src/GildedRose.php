<?php
declare(strict_types=1);

namespace App;

use App\Items\BackstageItem\BackstageItem;
use App\Items\BrieItem\BrieItem;
use App\Items\ConjuredItem\ConjuredItem;
use App\Items\RegularItem\RegularItem;
use App\Items\SulfurasItem\SulfurasItem;

final class GildedRose {

    private $items = [];

    /**
     * GildedRose constructor.
     * @param $items
     */
    public function __construct($items) {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $itemClass = $this->getItemClass($item);
            $item->sell_in = $itemClass->setSellIn();
            $item->quality = $itemClass->checkIfCanSetQuality();
        }
    }

    /**
     * @param $item
     * @return BackstageItem|BrieItem|ConjuredItem|RegularItem|SulfurasItem
     */
    protected function getItemClass(Item $item) {
        $itemName = $item->name;
        switch ($itemName) {
            case BrieItem::BRIE_ITEM_NAME:
                $itemClass = new BrieItem($item);
                break;
            case SulfurasItem::SULFURAS_ITEM_NAME:
                $itemClass = new SulfurasItem($item);
                break;
            case ConjuredItem::CONJURED_ITEM_NAME:
                $itemClass = new ConjuredItem($item);
                break;
            case BackstageItem::BACKSTAGE_ITEM_NAME:
                $itemClass = new BackstageItem($item);
                break;
            default:
                $itemClass = new RegularItem($item);
                break;
        }
        return $itemClass;
    }
}

