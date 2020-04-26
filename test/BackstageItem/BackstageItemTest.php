<?php
declare(strict_types=1);

namespace TestItems\BackstageItem;

use TestItems\AbstractTestItem;

class BackstageItemTest extends AbstractTestItem
{
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
            ]
        ];
    }

}