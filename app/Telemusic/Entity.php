<?php 

namespace App\Telemusic;

trait Entity
{
	public function register($userName, $lastName, $phoneNumber)
	{
		$result = $this->request('POST', 'User', [
					"userName" => $userName,
				    'isActive' => false,
				    'isAdmin' => false,
				    "lastName" => $lastName,
				    "password" => "123456",
					"passwordConfirm" => "123456",
				    'phoneNumber' => $phoneNumber,
				    "rolesIds" => [
				    	"5c2bebe3d2535171d"
				    ],
				    "rolesNames" => [
				    	"5c2bebe3d2535171d" => "User Frontend"
				    ],
				]);

		return $result;
	}

	public function userExists($userName)
	{
		$result = $this->request('GET', 'User', [
					"select" => "firstName",
					"where[0][type]" => "equals",
					"where[0][attribute]" => "userName",
					"where[0][value]" => $userName
				]);

		return $result['total'];
	}
}