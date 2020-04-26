<?php
declare(strict_types=1);

namespace TestItems\BrieItem;

use TestItems\AbstractTestItem;

class BrieItemTest extends AbstractTestItem
{
    /**
     * @return array|array[]
     */
    public function itemProvider(): array
    {

        return [
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
            ]
        ];
    }

}