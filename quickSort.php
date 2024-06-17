<?php

function quickSort(& $array)
{
    $length = count($array);
	quickSortRec($array, 0, $length - 1);

}

function quickSortRec(& $array, $start, $end)
{
	if ($start < $end)
	{
		$pivot = partition($array, $start, $end);


		quickSortRec($array, $start, $pivot - 1);
		quickSortRec($array, $pivot + 1, $end);
	}
}

function partition(& $array, $start, $end)
{
	$pivotIndex = $start;
	$pivotElement = $array[$start];
	$index = $start + 1;

	while ($index <= $end)
	{
		if ($array[$index] <= $pivotElement)
		{
			$pivotIndex++;
			$temp = $array[$index];
			$array[$index] = $array[$pivotIndex];
			$array[$pivotIndex] = $temp;
		}
		$index++;
	}
	$temp = $array[$pivotIndex];
	$array[$pivotIndex] = $array[$start];
	$array[$start] = $temp;

	return $pivotIndex;
}

