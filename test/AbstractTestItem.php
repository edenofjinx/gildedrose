<?php
declare(strict_types=1);

namespace TestItems;

use PHPUnit\Framework\TestCase;
use App\Item;
use App\GildedRose;

abstract class AbstractTestItem extends TestCase
{
    protected $item;

    public function setUp(): void
    {
        parent::setUp();
        $this->item = $this->getProvidedData();
    }

    /**
     * @dataProvider itemProvider
     */
    public function testItems(): void
    {
        $item = $this->generateItem($this->item['name'], $this->item['sellIn'], $this->item['quality']);
        $this->updateItem($item);
        $this->assertEquals($this->item['expectedName'], $item[0]->name);
        $this->assertEquals($this->item['expectedSellIn'], $item[0]->sell_in);
        $this->assertEquals($this->item['expectedQuality'], $item[0]->quality);
    }

    /**
     * @param $name
     * @param $sellIn
     * @param $quality
     * @return Item[]|array
     */
    protected function generateItem($name, $sellIn, $quality): array
    {
        return [new Item($name, $sellIn, $quality)];
    }

    /**
     * @param $item
     */
    protected function updateItem($item): void
    {
        $gildedRose = new GildedRose($item);
        $gildedRose->updateQuality();
    }

    /**
     * @return array|array[]
     */
    public function itemProvider(): array
    {
        return [
            [
                'name' => '+5 Dexterity Vest',
                'sellIn' => 10,
                'quality' => 20,
                'expectedName' => '+5 Dexterity Vest',
                'expectedSellIn' => 9,
                'expectedQuality' => 19
            ],
            [
                'name' => '+5 Dexterity Vest',
                'sellIn' => 0,
                'quality' => 20,
                'expectedName' => '+5 Dexterity Vest',
                'expectedSellIn' => -1,
                'expectedQuality' => 18
            ],
            [
                'name' => '+5 Dexterity Vest',
                'sellIn' => -1,
                'quality' => 0,
                'expectedName' => '+5 Dexterity Vest',
                'expectedSellIn' => -2,
                'expectedQuality' => 0
            ],
            [
                'name' => 'Sulfuras, Hand of Ragnaros',
                'sellIn' => 10,
                'quality' => 80,
                'expectedName' => 'Sulfuras, Hand of Ragnaros',
                'expectedSellIn' => 10,
                'expectedQuality' => 80
            ],
            [
                'name' => 'Sulfuras, Hand of Ragnaros',
                'sellIn' => 0,
                'quality' => 80,
                'expectedName' => 'Sulfuras, Hand of Ragnaros',
                'expectedSellIn' => 0,
                'expectedQuality' => 80
            ],
            [
                'name' => 'Sulfuras, Hand of Ragnaros',
                'sellIn' => -5,
                'quality' => 0,
                'expectedName' => 'Sulfuras, Hand of Ragnaros',
                'expectedSellIn' => -5,
                'expectedQuality' => 80
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 15,
                'quality' => 20,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => 14,
                'expectedQuality' => 21
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 0,
                'quality' => 20,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => -1,
                'expectedQuality' => 0
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 1,
                'quality' => 20,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => 0,
                'expectedQuality' => 23
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 10,
                'quality' => 20,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => 9,
                'expectedQuality' => 22
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 0,
                'quality' => 0,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => -1,
                'expectedQuality' => 0
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 5,
                'quality' => 0,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => 4,
                'expectedQuality' => 3
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 5,
                'quality' => 50,
                'expectedName' => 'Backstage passes to a TAFKAL80ETC concert',
                'expectedSellIn' => 4,
                'expectedQuality' => 50
            ],
            [
                'name' => 'Aged Brie',
                'sellIn' => 10,
                'quality' => 20,
                'expectedName' => 'Aged Brie',
                'expectedSellIn' => 9,
                'expectedQuality' => 21
            ],
            [
                'name' => 'Aged Brie',
                'sellIn' => 0,
                'quality' => 20,
                'expectedName' => 'Aged Brie',
                'expectedSellIn' => -1,
                'expectedQuality' => 22
            ],
            [
                'name' => 'Aged Brie',
                'sellIn' => 10,
                'quality' => 0,
                'expectedName' => 'Aged Brie',
                'expectedSellIn' => 9,
                'expectedQuality' => 1
            ],
            [
                'name' => 'Aged Brie',
                'sellIn' => -5,
                'quality' => 48,
                'expectedName' => 'Aged Brie',
                'expectedSellIn' => -6,
                'expectedQuality' => 50
            ],
            [
                'name' => 'Aged Brie',
                'sellIn' => 10,
                'quality' => 50,
                'expectedName' => 'Aged Brie',
                'expectedSellIn' => 9,
                'expectedQuality' => 50
            ],
            [
                'name' => 'Conjured Mana Cake',
                'sellIn' => 10,
                'quality' => 20,
                'expectedName' => 'Conjured Mana Cake',
                'expectedSellIn' => 9,
                'expectedQuality' => 18
            ],
            [
                'name' => 'Conjured Mana Cake',
                'sellIn' => -1,
                'quality' => 20,
                'expectedName' => 'Conjured Mana Cake',
                'expectedSellIn' => -2,
                'expectedQuality' => 16
            ],
            [
                'name' => 'Conjured Mana Cake',
                'sellIn' => -1,
                'quality' => 0,
                'expectedName' => 'Conjured Mana Cake',
                'expectedSellIn' => -2,
                'expectedQuality' => 0
            ]
        ];
    }

}