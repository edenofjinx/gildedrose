<?php
declare(strict_types=1);

namespace App\Items\BrieItem;

use App\Items\AbstractItem;

class BrieItem extends AbstractItem
{
    protected $qualityDecrease = -(AbstractItem::QUALITY_DECREASE_QTY);

}