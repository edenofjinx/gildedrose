<?php
declare(strict_types=1);

namespace App\Items;

use App\Items\AbstractItem;

class SulfurasItem extends AbstractItem
{
    protected $maximumQuality = 80;

    /**
     * @return int
     */
    public function checkIfCanSetQuality(): int
    {
        return $this->maximumQuality;
    }

    /**
     * @return int
     */
    public function setSellIn(): int
    {
       return $this->getSellIn();
    }
}