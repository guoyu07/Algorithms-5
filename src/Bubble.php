<?php

/**
 * User: Will
 * Date: 2017/5/25
 * Time: 13:07
 */
class Bubble extends BaseSort
{
    function sort()
    {
        $total = count($this->unsorted);


        do {
            $swapped = false;

            for ( $i = 0; $i < $total-1; $i++ ) {
                if ( $this->unsorted[$i] > $this->unsorted[$i+1] ) {
                    $this->exchange( $i, $i+1 );
                    $swapped = true;
                }
            }

            $total--;
        } while( $swapped );

        $this->sorted = $this->unsorted;
    }
}