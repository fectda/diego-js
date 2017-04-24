<?php

namespace DiegoJS\Masters;

use DiegoJS\Contracts\HomeWorks;

abstract class Assignment implements HomeWorks  {

	public function getView(){
		return $this->view;
	}


	public function getArgs(){
		return [];
	}


}
