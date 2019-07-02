<?php
class BaseClass {
	function __construct() {
		echo 'This is parent construct<br/>';
	}
}

class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();
		echo 'This is sub construct<br/>';
	}
}
class OtherClass extends BaseClass {

}

$a = new BaseClass();
$b = new SubClass();
$c = new OtherClass();