<?php

class aaa {
	public $a = 5;
	public function bbb($a) {
		echo $a . '</br>';
	}
}

$aaa = new aaa();

$b = $aaa->bbb(3);

$a = $aaa->a;

$b2 = $aaa->bbb($a);
