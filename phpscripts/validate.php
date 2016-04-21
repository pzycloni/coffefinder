<?php
	//var_dump(Session::exists(Config::get("session/session_name")));
	Session::delete(Config::get("session/session_name"));
	if (!Session::exists(Config::get("session/session_name"))) {
		$user->signInSystem(
			Input::get("inp_user_name"),
			Input::get("inp_password")
		);
		Session::put(Config::get("session/session_name"), Input::get("inp_user_name"));
	}
?>