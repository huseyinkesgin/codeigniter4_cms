<?php

namespace App\Controllers\Auth;

use App\Models\UserModel;
use App\Controllers\BaseController;
use App\Libraries\EmailTo;


class Forgot extends BaseController
{
	protected $validation;
	protected $session;
	protected $userModel;
	protected $emailTo;

	public function __construct()
	{
		$this->validation = \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->userModel = new UserModel();
		$this->emailTo = new emailTo();
	}

	public function index()
	{
		if ($this->request->getMethod() == 'post') {

			$data = [
				'email' => $this->request->getPost('email')
			];

			if (!$this->validation->run($data, 'forgot')) {
				$this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
				return redirect()->to(route_to('auth_password_forgot'));
			}

			$user = $this->userModel->where('email',$data['email'])->first();
			if (!$user) {
				$this->session->setFlashdata(['errors' => 'Böyle bir kullanıcı bulunmadı']);
				return redirect()->to(route_to('auth_password_forgot'));
			}

			$send = $this->emailTo->settings()->setUser($user)->passwordForgot()->send();

			if (!$send) {

				$this->session->setFlashdata(['errors' => 'Eposta gönderilemedi. Lütfen daha sonra tekrar deneyiniz']);
				return redirect()->to(route_to('auth_password_forgot'));
			}

			return view('auth/verify/password-forgot-success');

		}
		return view('auth/password-forgot');
	}

	public function change()
	{
	}
}
