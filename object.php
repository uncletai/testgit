<?php

class num {
	public $a = 5;
	public function bbb($a) {
		echo $a . '</br>';
		echo $this->a . '</br>';
	}
}

class str{
	public static $c = 'stringas';
	public static function ccc($c) {
		echo self::$c . '<br/>';
	}
}

$num = new num();
$b = $num->bbb(3);

$str = new str();
$c = $str->ccc($str);