<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\UserEntity;
use App\Models\UserModel;

class Verification extends BaseController
{

	protected $userModel;
	protected $userEntity;

	public function __construct()
	{
		$this->userModel =  new UserModel();
		$this->userEntity =  new UserEntity();
	}


	public function account($token)
	{
		$decode = base64_decode($token);
		$explode = explode('.', $decode);

		if (!isset($explode[1]) || !isset($explode[0])) {
			return view('auth/verify/account-verify-error');
		}

		$userID = $explode[0];
		$verifyKey = $explode[1];


		$user = $this->userModel->where([
			'id'	=> $userID,
			'verify_key' => $verifyKey,
			'status' => USER_PENDING
		])->find();

		if (!$user) {
			return view('auth/verify/account-verify-error');
		}

		$this->userEntity->setStatus(USER_ACTIVE);
		$this->userEntity->setVerifyKey();
		$update = $this->userModel->update($userID, $this->userEntity);

		if (!$update) {
			return view('auth/verify/account-verify-error');
		}



		return view('auth/verify/account-verify-success');
	}

		public function forgot()
		{
			
		}


}
