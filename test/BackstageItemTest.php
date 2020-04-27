<?php
declare(strict_types=1);

namespace TestItems;

use App\GildedRose;
use App\Item;
use PHPUnit\Framework\TestCase;

class BackstageItemTest extends TestCase
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
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 15,
                'quality' => 20,
                'expectedSellIn' => 14,
                'expectedQuality' => 21
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 0,
                'quality' => 20,
                'expectedSellIn' => -1,
                'expectedQuality' => 0
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 1,
                'quality' => 20,
                'expectedSellIn' => 0,
                'expectedQuality' => 23
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 10,
                'quality' => 20,
                'expectedSellIn' => 9,
                'expectedQuality' => 22
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 0,
                'quality' => 0,
                'expectedSellIn' => -1,
                'expectedQuality' => 0
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 5,
                'quality' => 0,
                'expectedSellIn' => 4,
                'expectedQuality' => 3
            ],
            [
                'name' => 'Backstage passes to a TAFKAL80ETC concert',
                'sellIn' => 5,
                'quality' => 50,
                'expectedSellIn' => 4,
                'expectedQuality' => 50
            ]
        ];
    }

}