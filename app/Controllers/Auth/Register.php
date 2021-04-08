<?php

namespace App\Controllers\Auth;

use App\Models\UserModel;
use App\Libraries\EmailTo;
use App\Entities\UserEntity;
use App\Controllers\BaseController;


class Register extends BaseController
{

    protected $validation;
    protected $session;
    protected $userEntity;
    protected $userModel;
   

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->userEntity = new UserEntity();
        $this->userModel = new UserModel();

        
    }

    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $data = [
                
                'first_name' => $this->request->getPost('first_name'),
                'sur_name' => $this->request->getPost('sur_name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'password2' => $this->request->getPost('password2'),
            ];

            if (!$this->validation->run($data, 'register')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('auth_register'));
            }

            $this->userEntity->setFirstName($data['first_name']);
            $this->userEntity->setSurName($data['sur_name']);
            $this->userEntity->setEmail($data['email']);
            $this->userEntity->setVerifyKey();
            $this->userEntity->setVerifyCode();
            $this->userEntity->setStatus(USER_PENDING);
            $this->userEntity->setPassword($data['password']);

            $insert = $this->userModel->insert($this->userEntity);

            if ($this->userModel->errors()) {
                $this->session->setFlashdata(['errors' => $this->userModel->errors()]);
                return redirect()->to(route_to('auth_register'));
            }

            #Eposta gönderme işlemi yapma
            $email = new EmailTo();
            $user = $this->userModel->find($insert);
            $to = $email->settings()->setUser($user)->accountVerify()->send();
            if ($to) {
                $this->session->setFlashdata(['success' => lang_register('controller.success_register')]);
                return redirect()->to(route_to('auth_register'));
            }

            $this->session->setFlashdata(['errors' => lang_register('controller.error_email')]);
            return redirect()->to(route_to('auth_register'));
        }

        return view('auth/register');
    }
}
