<?php
declare(strict_types=1);

namespace App\Items;

abstract class AbstractItem
{
    public const BRIE_ITEM_NAME = 'Aged Brie';
    public const SULFURAS_ITEM_NAME = 'Sulfuras, Hand of Ragnaros';
    public const BACKSTAGE_ITEM_NAME = 'Backstage passes to a TAFKAL80ETC concert';
    public const CONJURED_ITEM_NAME = 'Conjured Mana Cake';
    public const QUALITY_DECREASE_QTY = 1;

    protected $item;
    protected $updateSellInBy = 1;
    protected $maximumQuality = 50;
    protected $minimumQuality = 0;
    protected $qualityDecrease = self::QUALITY_DECREASE_QTY;

    /**
     * AbstractItem constructor.
     * @param $item
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return $this->item->sell_in;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->item->quality;
    }

    /**
     * @return int
     */
    public function setSellIn(): int
    {
        $this->item->sell_in = $this->getSellIn() - $this->updateSellInBy;
        return $this->item->sell_in;
    }

    /**
     * @return int
     */
    public function checkIfCanSetQuality(): int
    {
        if ($this->getSellIn() < 0) {
            return $this->checkAllowedQuality($this->qualityDecrease * 2);
        }
        return $this->checkAllowedQuality($this->qualityDecrease);
    }

    /**
     * @param $decrease
     * @return int
     */
    protected function setQuality(int $decrease): int
    {
        return $this->getQuality() - $decrease;
    }

    /**
     * @param $decrease
     * @return int
     */
    protected function checkAllowedQuality(int $decrease): int
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