<?php

namespace App\Items\ConjuredItem;

use App\Items\AbstractItem;
use App\Items\ItemInterface;

class ConjuredItem extends AbstractItem
{
    protected $qualityDecrease = ItemInterface::QUALITY_DECREASE_QTY * 2;
}