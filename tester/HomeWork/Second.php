<?php

namespace DiegoJS\HomeWork;

use DiegoJS\Masters\Assignment;

class Second extends Assignment
{
	protected $view = "second";
	// protected $count = 0 ;

	function __construct( array $args)
	{
		// $this->count = $args[0];
	}

	public function getArgs(){

		$colors = $this->getColors();
		return [
			"counters"	=> $this->getCounters(),
			"colors"	=> $colors,
			"posts"		=> $this->getPosts(count($colors))
		];
	}

	protected function getCounters()
	{
		return $this->makeRandomElements(function($i){
			return rand(0,10);
		}, 10) ;
	}

	protected function getColors()
	{
		return $this->makeRandomElements(function($i){
			return (object ) [
				"id"		=> $i,
				"colors"	=>	[
					$this->randomColor(),
					$this->randomColor(),
					$this->randomColor(),
				]
			];
		}, 10) ;
	}

	protected function getPosts($total_colors)
	{
		return $this->makeRandomElements(function($i) use ($total_colors){
			return (object ) [
				"title"		=> $this->generateRandomString(10),
				"content"	=> $this->generateRandomString(30),
				"color_id"  => rand(0,$total_colors)
			];
		}, 10) ;
	}




	protected function randomColorPart()
	{
		return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}

	protected function randomColor()
	{
		return $this->randomColorPart() . $this->randomColorPart() . $this->randomColorPart();
	}

	protected function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < rand(1,10); $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	protected function makeRandomElements($object,$max_total_elements)
	{
		$total_elements = rand(1,$max_total_elements);
		$elements = [];
		for ($i=1; $i <= $total_elements; $i++) {
			$elements[] = $object($i);
		}

		return $elements;
	}

}
