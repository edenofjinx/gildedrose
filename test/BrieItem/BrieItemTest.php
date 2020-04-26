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
            ['BRIE - Test assert correct values' =>
                'Aged Brie', 10, 20,
                'Aged Brie', 9, 21],
            ['BRIE - Test case with 0 sellIn' =>
                'Aged Brie', 0, 20,
                'Aged Brie', -1, 22],
            ['BRIE - Test case with 0 quality' =>
                'Aged Brie', 10, 0,
                'Aged Brie', 9, 1],
            ['BRIE - Test case with negative sellIn' =>
                'Aged Brie', -5, 48,
                'Aged Brie', -6, 50],
            ['BRIE - Test case with 50 quality' =>
                'Aged Brie', 10, 50,
                'Aged Brie', 9, 50]
        ];
    }

}