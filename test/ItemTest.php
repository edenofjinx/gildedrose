<?php

namespace App\test;

use PHPUnit\Framework\TestCase;
use App\Item;
use App\GildedRose;

class ItemTest extends TestCase
{

    /**
     * @dataProvider itemProvider
     * @param $name
     * @param $sellIn
     * @param $quality
     * @param $expectedName
     * @param $expectedSellIn
     * @param $expectedQuality
     */
    public function testItems($name, $sellIn, $quality, $expectedName, $expectedSellIn, $expectedQuality): void
    {
        $item = [new Item($name, $sellIn, $quality)];
        $gildedRose = new GildedRose($item);
        $gildedRose->updateQuality();
        $this->assertEquals($expectedName, $item[0]->name);
        $this->assertEquals($expectedSellIn, $item[0]->sell_in);
        $this->assertEquals($expectedQuality, $item[0]->quality);
    }

    public function itemProvider(): array
    {
        /**
         * @todo ADD SULFURAS ITEM QUALITY CHECK TO ALWAYS BE 80
         * @todo ADD ITEM QUALITY CHECK TO NOT BE ABOVE 50, EXCEPT SULFURAS
         * @todo ADD CONJURED ITEMS
         */
        return [
            ['REGULAR - Test assert correct values' =>
                '+5 Dexterity Vest', 10, 20,
                '+5 Dexterity Vest', 9, 19],
            ['REGULAR - Test case with 0 sellIn' =>
                '+5 Dexterity Vest', 0, 20,
                '+5 Dexterity Vest', -1, 18],
            ['REGULAR - Test case with 0 quality' =>
                '+5 Dexterity Vest', -1, 0,
                '+5 Dexterity Vest', -2, 0],
            ['SULFURAS - Test assert correct values' =>
                'Sulfuras, Hand of Ragnaros', 10, 80,
                'Sulfuras, Hand of Ragnaros', 10, 80],
            ['SULFURAS - Test case with 0 sellIn' =>
                'Sulfuras, Hand of Ragnaros', 0, 80,
                'Sulfuras, Hand of Ragnaros', 0, 80],
            ['SULFURAS - Test case with 0 quality' =>
                'Sulfuras, Hand of Ragnaros', -5, 0,
                'Sulfuras, Hand of Ragnaros', -5, 0],
            ['BACKSTAGE - Test assert correct values sellIn > 10' =>
                'Backstage passes to a TAFKAL80ETC concert', 15, 20,
                'Backstage passes to a TAFKAL80ETC concert', 14, 21],
            ['BACKSTAGE - Test case with 0 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 0, 20,
                'Backstage passes to a TAFKAL80ETC concert', -1, 0],
            ['BACKSTAGE - Test case with 1 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 1, 20,
                'Backstage passes to a TAFKAL80ETC concert', 0, 23],
            ['BACKSTAGE - Test case with 10 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 10, 20,
                'Backstage passes to a TAFKAL80ETC concert', 9, 22],
            ['BACKSTAGE - Test case with 0 quality 0 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 0, 0,
                'Backstage passes to a TAFKAL80ETC concert', -1, 0],
            ['BACKSTAGE - Test case with 0 quality 5 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 5, 0,
                'Backstage passes to a TAFKAL80ETC concert', 4, 3],
            ['BRIE - Test assert correct values' =>
                'Aged Brie', 10, 20,
                'Aged Brie', 9, 21],
            ['BRIE - Test case with 0 sellIn' =>
                'Aged Brie', 0, 20,
                'Aged Brie', -1, 22],
            ['BRIE - Test case with 0 quality' =>
                'Aged Brie', 10, 0,
                'Aged Brie', 9, 1],
        ];
    }

}