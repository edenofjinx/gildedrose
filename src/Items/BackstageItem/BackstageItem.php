<?php

namespace App\Items\BackstageItem;

use App\Items\AbstractItem;

class BackstageItem extends AbstractItem
{
    protected $qualityDecrease = -1;
    protected $lessThanOrTenDaysModifier = 2;
    protected $lessThanOrFiveDaysModifier = 3;

    public function checkIfCanSetQuality()
    {
        return $this->checkSellIn();
    }

    protected function checkSellIn()
    {
        if ($this->getSellIn() <= 10) {
            if ($this->getSellIn() <= 5) {
                if ($this->getSellIn() < 0) {
                    return $this->minimumQuality;
                }
                return $this->checkAllowedQuality($this->qualityDecrease * $this->lessThanOrFiveDaysModifier);
            }
            return $this->checkAllowedQuality($this->qualityDecrease * $this->lessThanOrTenDaysModifier);
        }
        return $this->checkAllowedQuality($this->qualityDecrease);
    }
}