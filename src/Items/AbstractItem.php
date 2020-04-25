<?php

namespace App\Items;

abstract class AbstractItem implements ItemInterface
{

    protected $item;
    protected $updateSellInBy = 1;
    protected $maximumQuality = 50;
    protected $minimumQuality = 0;
    protected $qualityDecrease = ItemInterface::QUALITY_DECREASE_QTY;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public function getName()
    {
        return $this->item->name;
    }

    public function getSellIn()
    {
        return $this->item->sell_in;
    }

    public function getQuality()
    {
        return $this->item->quality;
    }

    public function setSellIn()
    {
        $this->item->sell_in = $this->getSellIn() - $this->updateSellInBy;
        return $this->item->sell_in;
    }

    public function checkIfCanSetQuality()
    {
        if ($this->getSellIn() < 0) {
            return $this->checkAllowedQuality($this->qualityDecrease * 2);
        }
        return $this->checkAllowedQuality($this->qualityDecrease);
    }

    protected function setQuality($decrease)
    {
        return $this->getQuality() - $decrease;
    }

    protected function checkAllowedQuality($decrease)
    {
        if ($this->setQuality($decrease) > $this->maximumQuality) {
            return $this->maximumQuality;
        }
        if ($this->setQuality($decrease) < 0) {
            return $this->minimumQuality;
        }
        return $this->setQuality($decrease);
    }

}