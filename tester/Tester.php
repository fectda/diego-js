<?php
namespace DiegoJS;

use DiegoJS\Contracts\HomeWorks;

use DiegoJS\HomeWork\First;
/**
 * first class
 */
class Tester
{
	public function isAGoogDay()
	{
		return rand(0,99) >= 33;
	}

	public static function init( HomeWorks $home_work)
	{
		static::views($home_work->getView(),$home_work->getArgs() );
	}

	public static function views($path,array $args )
	{
		foreach ($args as $key => $value) {
			${$key} = $value;
		}
		include __DIR__."./../views/".$path.".php";
	}
}
