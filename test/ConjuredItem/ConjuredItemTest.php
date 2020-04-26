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
            ['CONJURED - Test assert correct values' =>
                'Conjured Mana Cake', 10, 20,
                'Conjured Mana Cake', 9, 18],
            ['CONJURED - Test case with 0 sellIn' =>
                'Conjured Mana Cake', -1, 20,
                'Conjured Mana Cake', -2, 16],
            ['CONJURED - Test case with 0 quality' =>
                'Conjured Mana Cake', -1, 0,
                'Conjured Mana Cake', -2, 0]
        ];
    }

}