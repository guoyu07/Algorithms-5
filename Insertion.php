<?php
namespace Algorithm;
class Insertion extends BaseSort
{
    function sort()
    {
        $total = count($this->unsorted);

        for( $i = 0; $i < $total; $i++ ) {
            for ( $j = $i; $j > 0 && $this->unsorted[$j-1] > $this->unsorted[$j]; $j-- ) {
                $tmp = $this->unsorted[$j-1];
                $this->unsorted[$j-1] = $this->unsorted[$j];
                $this->unsorted[$j] = $tmp;
            }
        }

        $this->sorted = $this->unsorted;
    }
}