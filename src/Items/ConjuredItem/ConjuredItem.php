<?php
declare(strict_types=1);

namespace App\Items\ConjuredItem;

use App\Items\AbstractItem;

class ConjuredItem extends AbstractItem
{
    protected $qualityDecrease = AbstractItem::QUALITY_DECREASE_QTY * 2;
}