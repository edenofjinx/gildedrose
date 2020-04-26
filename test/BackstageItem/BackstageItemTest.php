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
            ['BACKSTAGE - Test assert correct values sellIn > 10' =>
                'Backstage passes to a TAFKAL80ETC concert', 15, 20,
                'Backstage passes to a TAFKAL80ETC concert', 14, 21],
            ['BACKSTAGE - Test case with 0 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 0, 20,
                'Backstage passes to a TAFKAL80ETC concert', -1, 0],
            ['BACKSTAGE - Test case with 1 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 1, 20,
                'Backstage passes to a TAFKAL80ETC concert', 0, 23],
            ['BACKSTAGE - Test case with 10 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 10, 20,
                'Backstage passes to a TAFKAL80ETC concert', 9, 22],
            ['BACKSTAGE - Test case with 0 quality 0 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 0, 0,
                'Backstage passes to a TAFKAL80ETC concert', -1, 0],
            ['BACKSTAGE - Test case with 0 quality 5 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 5, 0,
                'Backstage passes to a TAFKAL80ETC concert', 4, 3],
            ['BACKSTAGE - Test case with 50 quality 5 sellIn' =>
                'Backstage passes to a TAFKAL80ETC concert', 5, 50,
                'Backstage passes to a TAFKAL80ETC concert', 4, 50]
        ];
    }

}