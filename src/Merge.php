<?php

/**
 * Time: 2017/5/27 下午9:47
 */
class Merge extends BaseSort
{
	function sort()
	{
		$sort = function( $unsorted ) use( &$sort ) {
			$total = count( $unsorted );

			if ( $total <= 1 )
				return $unsorted;

			$middle = (int)( $total / 2 );

			$left = array_slice( $unsorted, 0, $middle );
			$right = array_slice( $unsorted, $middle );

			$left = $sort( $left );
			$right = $sort( $right );

			$result = $this->doMerge( $left, $right );

			return $result;
		};

		$this->sorted = $sort( $this->unsorted );
	}

	private function doMerge( $left, $right )
	{
		$result = [];

		while ( count( $left ) > 0 && count( $right ) > 0 ) {
			if ( $left[0] < $right[0] ) {
				$result[] = array_shift( $left );
			} else
				$result[] = array_shift( $right );
		}

		array_splice( $result, count($result), 0, $left );
		array_splice( $result, count($result), 0, $right );

		return $result;
	}
}