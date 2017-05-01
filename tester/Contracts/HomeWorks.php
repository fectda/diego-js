<?php
namespace DiegoJS\Contracts;

interface HomeWorks {

	public function getView();
	public function getArgs();

	public static function make( array $args );

}
