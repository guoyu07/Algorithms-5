<?php
abstract class BaseSort
{
    protected $unsorted;
    protected $sorted;

    const INSERTION = 'Insertion';
    const SELECTION = 'Selection';
    const BUBBLE = 'Bubble';
    const MERGE = 'Merge';
    const QUICK = 'Quick';
    /**
     * @param $algorithm
     * @return BaseSort
     */
    public static function getInstance($algorithm)
    {
        return new $algorithm();
    }

    /**
     * @param $key1
     * @param $key2
     */
    protected function exchange( $key1, $key2 )
    {
        $tmp = $this->unsorted[$key1];
        $this->unsorted[$key1] = $this->unsorted[$key2];
        $this->unsorted[$key2] = $tmp;
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