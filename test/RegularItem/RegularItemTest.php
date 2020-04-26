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
            ['REGULAR - Test assert correct values' =>
                '+5 Dexterity Vest', 10, 20,
                '+5 Dexterity Vest', 9, 19],
            ['REGULAR - Test case with 0 sellIn' =>
                '+5 Dexterity Vest', 0, 20,
                '+5 Dexterity Vest', -1, 18],
            ['REGULAR - Test case with 0 quality' =>
                '+5 Dexterity Vest', -1, 0,
                '+5 Dexterity Vest', -2, 0]
        ];
    }

}