<?php

namespace App\Controller;

class Controller
{
	public $namespace;
	
	public function __construct()
	{
		$this->namespace = __NAMESPACE__;
	}
}