<?php


function createUser() {

	$usersArray = [];
	$names = ['Иван', 'Александр', 'Вадим', 'Сергей', 'Алексей'];

	for ($i = 0; $i < 50; $i++) {

		$userId = $i;
		$userName = $names[mt_rand(0, 4)];
		$userAge = mt_rand(18, 45);

		$user = [
			'id' => $userId,
			'name' => $userName,
			'age' => $userAge
		];

		array_push($usersArray, $user);
	}

	return $usersArray;
}



function countNames($array) {

	$allNames = [];
	$onceNames = [];

	foreach($array as $key => $value){

		array_push($allNames, $value['name']);

		if (!in_array($value['name'], $onceNames)){

			array_push($onceNames, $value['name']);
		}
	}

	$allNames = implode(', ', $allNames);


	foreach($onceNames as $key => $value) {

		str_replace($value, ' ', $allNames, $count);

		echo "Количество пользователей с именем $value - $count <br>";
	}
}



function countAge($array) {

	$usersNumber = sizeof($array);
	$sumOfAges = 0;


	foreach($array as $key => $value) {

		$thisAge = $value['age'];

		$sumOfAges = $sumOfAges + $thisAge;
	}

	echo "Средний возраст всех пользователей - " . round($sumOfAges / $usersNumber);
}

