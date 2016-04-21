<?
	// В этом файле мы подключаем все классы из папки "classes",
	// обЪявляем в глобальном массиве основные настройки, 
	// а также создаем объект класса User
	session_start();

	// основные настройки конфига
	$GLOBALS['config'] = array(
		'mysql' => array(
			'host' 		=> 'coffeefinder.ru',
			'db' 		=> 'coffeefinder',
			'username'	=> 'mysql',
			'password' 	=> 'mysql'
		),
		'table' => array(
			'user' => array(
				'uid' 		=> 'id',
				'username' 	=> 'username',
				'fname' 	=> 'full_name',
				'pass'		=> 'password',
				'email' 	=> 'email',
				'salt' 		=> 'salt',
				'joined'	=> 'joined',
				'group'		=> 'group'
			),
			'group' => array(
				'uid' 		=> 'id',
				'name' 		=> 'name',
				'permis' 	=> 'permissions'
			),
		),
		'session' => array(
			'session_name' 	=> 'uname',
			'session_id'	=> 'id'
		),
		'remember' => array(
			'cookie_name' => 'hash',
			'cookie_life' => 604800
		),
		'post' => array()
	);

	
	// подгружаем все классы
	spl_autoload_register(function($class){
		require_once "/app/classes/" . $class . '.php';
	});

	$user = new User();
?>