<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function getIndex() {
		return view('pages.welcome');
	}
	public function getAbout() {
		$first = 'Jacob';
		$last = 'Hammerle';

		$fullname = $first . " " . $last;

		$email = 'hammerja@miamioh.edu';

		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages.about') -> withData($data);
	}
	public function getContact() {
		return view('pages.contact');
	}
	public function getAccount() {
		return view('pages.account');
	}
}

?>