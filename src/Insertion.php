<?php
class Insertion extends BaseSort
{
    function sort()
    {
        $total = count($this->unsorted);

        for( $i = 0; $i < $total; $i++ ) {
            for ( $j = $i; $j > 0 && $this->unsorted[$j-1] > $this->unsorted[$j]; $j-- ) {
                $this->exchange($j-1, $j);
            }
        }

        $this->sorted = $this->unsorted;
    }
}