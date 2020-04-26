<?php
declare(strict_types=1);

namespace TestItems\RegularItem;

use TestItems\AbstractTestItem;

class RegularItemTest extends AbstractTestItem
{

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
            ]
        ];
    }

}