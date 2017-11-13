<?php

namespace App;

class App
{
	public $namespace;

	public function __construct()
	{
		$this->namespace = __NAMESPACE__;
	}
}