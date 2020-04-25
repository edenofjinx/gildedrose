<?php

namespace App;

use PHPUnit\Framework\TestCase;

class GildedRoseNameTest extends TestCase
{

    public function testItemName(): void
    {
        $items = [new Item('Name', 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals('Name', $items[0]->name);
    }
}
