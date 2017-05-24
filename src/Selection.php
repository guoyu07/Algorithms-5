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
            $tmp = $this->unsorted[$i];
            $this->unsorted[$i] = $this->unsorted[$min];
            $this->unsorted[$min] = $tmp;
        }

        $this->sorted = $this->unsorted;
    }
}
