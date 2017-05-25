<?php
abstract class BaseSort
{
    protected $unsorted;
    protected $sorted;

    const INSERTION = 'Insertion';
    const SELECTION = 'Selection';
    const BUBBLE = 'Bubble';

    /**
     * @param $algorithm
     * @return BaseSort
     */
    public static function getInstance($algorithm)
    {
        switch ($algorithm) {
            case self::INSERTION:
                return new Insertion();
                break;
            case self::SELECTION:
                return new Selection();
            case self::BUBBLE:
                return new Bubble();
        }

        return null;
    }

    public function setUnsorted($unsorted)
    {
        $this->unsorted = $unsorted;
    }

    public function getSorted()
    {
        return $this->sorted;
    }

    abstract function sort();
}