<?php
declare(strict_types=1);

namespace TestItems\ConjuredItem;

use TestItems\AbstractTestItem;

class ConjuredItemTest extends AbstractTestItem
{
    /**
     * @return array|array[]
     */
    public function itemProvider(): array
    {
        return [
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