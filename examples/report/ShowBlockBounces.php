<?php
	/**
	 * Created by PhpStorm.
	 * User: marksimonds
	 * Date: 2/3/16
	 * Time: 2:59 PM
	 */

	require_once('../config.php');

	try
	{
		/* initialize whatcounts */
		$whatcounts = new ZayconWhatCounts\WhatCounts( WC_REALM, WC_PASSWORD );

		$list_id = 13;
		$days = 45;

		$output = $whatcounts->showBlockBounces($list_id, $days);
		if (class_exists('Kint')) {
			!Kint::dump($output);
		} else {
			var_dump($output);
		}
	}
	catch ( ZayconWhatCounts\Exception $e )
	{
		if (class_exists('Kint')) {
			!Kint::dump($e);
		} else {
			var_dump($e);
		}
	}