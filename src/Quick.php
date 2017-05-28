<?php

/**
 * Time: 2017/5/28 下午2:54
 */
class Quick extends BaseSort
{
    function sort()
    {
        $sort = function( $unsorted ) use ( &$sort ) {
            if ( count( $unsorted ) < 2 )
                return $unsorted;

            $left = $right = array();

            reset( $unsorted );

            $pivotKey = key( $unsorted );
            $pivot = array_shift( $unsorted );

            foreach ( $unsorted as $key => $value ) {
                if ( $value < $pivot )
                    $left[] = $value;
                else
                    $right[] = $value;
            }

            return array_merge( $sort( $left ), [$pivotKey=>$pivot], $sort( $right ) );
        };

        $this->sorted = $sort( $this->unsorted );

    }
}