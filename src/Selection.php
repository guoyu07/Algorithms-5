<?php
class Selection extends BaseSort
{
    function sort()
    {
        $total = count($this->unsorted);

        for ( $i = 0; $i < $total; $i++ ) {
            $min = $i;
            for ( $j = $i+1; $j < $total; $j++ ) {
                if ( $this->unsorted[$j] < $this->unsorted[$min] ) $min = $j;
            }

            // exchange
            $this->exchange($i, $min);
        }

        $this->sorted = $this->unsorted;
    }
}
