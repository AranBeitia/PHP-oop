<?php

class SignupContr {
	private $uid;
	private $psw;
	private $pswrepeat;
	private $email;

	public function __construct($uid, $psw, $pswrepeat, $email) {
		$this-> uid = $uid;
		$this-> psw = $psw;
		$this-> pswrepeat = $pswrepeat;
		$this-> email = $email;
	}

	private function emptyInput() {
		$result = false;
		if(empty($this-> uid) || empty($this-> psw) || empty($this-> pswrepeat) || empty($this-> email)) {
			$result = false;
		} else {
			$result = true;
		}

		return $result;
	}

	private function invalidUid () {
		$result = false;
		if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
			$result = false;
		} else {
			$result= true;
		}
		return $result;
	}

	private function invalidEmail () {
		$result = false;
		if (!filter_var($this->uid, FILTER_VALIDATE_EMAIL)) {
			$result = false;
		} else {
			$result= true;
		}
		return $result;
	}

	private function pwdMatch () {
		$result = false;
		if ($this->psw !== $this->pswrepeat) {
			$result = false;
		} else {
			$result= true;
		}
		return $result;
	}

}