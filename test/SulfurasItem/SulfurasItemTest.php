<?php
declare(strict_types=1);

namespace TestItems\SulfurasItem;

use TestItems\AbstractTestItem;

class SulfurasItemTest extends AbstractTestItem
{
    /**
     * @return array|array[]
     */
    public function itemProvider(): array
    {

        return [
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
            ]
        ];
    }

}