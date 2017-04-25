<?php

namespace DiegoJS\HomeWork;

use DiegoJS\Masters\Assignment;

class First extends Assignment
{
	protected $view = "first";
	protected $count = 0 ;

	function __construct(int $count )
	{
		$this->count = $count;
	}

	public function getArgs(){
		return [
			"numbers"	=> range(0,9),
			"letters"	=> range(chr(97),chr(122)),
			"objects"	=> $this->getObjects()
		];
	}

	protected function getObjects()
	{
		$objects = [];


		for ($i=0; $i < abs($this->count); $i++) {
			$objects[] = [
				// "letter"	=>  chr(rand(65,90)),
				"letter"	=>  chr(rand(97,122)),
				"digit"		=> rand(0,9),
			];
		}
		return $objects;
	}


}
