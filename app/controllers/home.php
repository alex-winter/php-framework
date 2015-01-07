<?php

class home extends Controller
{
	public function index($name, $mood)
	{
		$this->view('home/index', [
			'name' => $name,
			'mood' => $mood
		]);
	}

	public function create($username = '', $email = '')
	{
		User::create([
			'username' => $username,
			'email' => $email
		]);
	}

}

