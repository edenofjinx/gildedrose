<?php

namespace App\Items\SulfurasItem;

use App\Items\AbstractItem;

class SulfurasItem extends AbstractItem
{
    protected $maximumQuality = 80;

    public function checkIfCanSetQuality()
    {
        return $this->maximumQuality;
    }

    public function setSellIn()
    {
       return $this->getSellIn();
    }
}