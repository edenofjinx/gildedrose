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
            ['SULFURAS - Test assert correct values' =>
                'Sulfuras, Hand of Ragnaros', 10, 80,
                'Sulfuras, Hand of Ragnaros', 10, 80],
            ['SULFURAS - Test case with 0 sellIn' =>
                'Sulfuras, Hand of Ragnaros', 0, 80,
                'Sulfuras, Hand of Ragnaros', 0, 80],
            ['SULFURAS - Test case with 0 quality' =>
                'Sulfuras, Hand of Ragnaros', -5, 0,
                'Sulfuras, Hand of Ragnaros', -5, 80]
        ];
    }

}