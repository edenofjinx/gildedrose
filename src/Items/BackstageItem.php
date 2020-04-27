<?php
declare(strict_types=1);

namespace App\Items;

use App\Items\AbstractItem;

class BackstageItem extends AbstractItem
{
    protected $qualityDecrease = -1;
    protected $lessThanOrTenDaysModifier = 2;
    protected $lessThanOrFiveDaysModifier = 3;

    /**
     * @return int
     */
    public function checkIfCanSetQuality(): int
    {
        return $this->checkSellIn();
    }

    /**
     * @return int
     */
    protected function checkSellIn(): int
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