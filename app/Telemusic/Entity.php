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

	public function getNewEvent()
	{
		return	$this->request('GET', 'LiveEvent', [
                    "select" => "",
                    "where[0][type]" => "in",
                    "where[0][attribute]" => "status",
                    "where[0][value][]" => 'Published'
                ]);

	}

	public function clientExists($phoneNumber)
	{
		return  $this->request('GET', 'Client', [
                    "select" => "",
                    "where[0][type]" => "startsWith",
                    "where[0][attribute]" => "phoneNumber",
                    "where[0][value]" => $phoneNumber
                ]);

	}

	public function createClient($phoneNumber)
	{
		return $this->request('POST', 'Client', [
			'phoneNumber' => $phoneNumber,
			'assignedUserId' => '5bed39e222f776a2c',
			'assignedUserName' => 'api'
		]);
	}

	public function sendOtp($phoneNumber)
	{
		try{
			$code = rand(1000, 9999);
			$api = new \Kavenegar\KavenegarApi( "50474576534E447253534F383577506E764233374B47706448552B334C5A7235" );
			$result = $api->VerifyLookup($phoneNumber,$code, '', '', 'telmusic', 'sms');

			$key_id = 'telemusic.ir.OPT.' . $phoneNumber;
			cache()->put($key_id, $code, 20);
		}
		catch(\Kavenegar\Exceptions\ApiException $e){
			echo $e->errorMessage();
		}
		catch(\Kavenegar\Exceptions\HttpException $e){
			echo $e->errorMessage();
		}
	}

	public function checkOtp($phoneNumber, $code)
	{
		$key_id = 'telemusic.ir.OPT.' . $phoneNumber;
		$stack_code = cache()->get($key_id);

		dd($stack_code, $code);

		if($stack_code == $code) {
			return true;
		}

		return false;
	}

}