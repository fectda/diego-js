<?php

namespace DiegoJS\HomeWork;

use DiegoJS\Masters\Assignment;

class First extends Assignment
{
	protected $view = "index";
	protected $count = 0 ;

	function __construct( $count )
	{
		$this->count = $count;
	}

	public function getArgs(){
		return [];
	}


}
