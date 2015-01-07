<?php

class Route
{

	private $_uri = [];

	public function get($uri)
	{
		$this->_uri[] = $uri;
	}

}