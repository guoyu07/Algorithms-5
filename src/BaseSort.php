<?php
abstract class BaseSort
{
    protected $unsorted;
    protected $sorted;

    const INSERTION = 'Insertion';
    const SELECTION = 'Selection';

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
        }
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