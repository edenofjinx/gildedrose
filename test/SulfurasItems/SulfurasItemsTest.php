<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SulfurasItemsTest extends TestCase
{

    protected $itemName = 'Regular Item';
    protected $itemSellIn = 20;
    protected $itemQuality = 25;
    protected $itemSellInEnded = -1;
    protected $itemQualityZero = 0;

    public function testRegularItemSellIn(): void
    {
        $items = [new Item($this->itemName, $this->itemSellIn, $this->itemQuality)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(19, $items[0]->sell_in);
    }

    public function testRegularItemQuality(): void
    {
        $items = [new Item($this->itemName, $this->itemSellIn, $this->itemQuality)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(24, $items[0]->quality);
    }

    public function testRegularItemSellInEnded(): void
    {
        $items = [new Item($this->itemName, $this->itemSellInEnded, $this->itemQuality)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(-2, $items[0]->sell_in);
    }

    public function testRegularItemQualityZero(): void
    {
        $items = [new Item($this->itemName, $this->itemSellIn, $this->itemQualityZero)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(0, $items[0]->quality);
    }

    public function testRegularItemSellInEndedWithPositiveQuality(): void
    {
        $items = [new Item($this->itemName, $this->itemSellInEnded, $this->itemQuality)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(23, $items[0]->quality);
    }

}
