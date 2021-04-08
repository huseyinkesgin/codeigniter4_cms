<?php


namespace App\Libraries;


class EmailTo
{
    protected $email;
    protected $user;

    public function __construct()
    {
        $this->email = \Config\Services::email();
    }

    public function settings()
    {
        $this->email->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => 'smtp.gmail.com',
            'SMTPUser' => 'dp.hk.41@gmail.com',
            'SMTPPass' => 'Duyrem11',
            'SMTPPort' => '587',
//            'SMTPCrypto' => 'TLS',
            'SMTPTimeout' => '60',
            'mailType' => 'html'
        ]);
        $this->email->setFrom('info@benimsite.com','Benimsite Web Medya');
        return $this;
    }

    public function setUser($user)
    {
        $this->user = $user;
        $this->email->setTo($this->user->getEmail());
        return $this;
    }

    public function accountVerify()
    {
        $this->email->setSubject('Hesabınızı Doğrulayın');
        $this->email->setMessage(view('admin/email/account-verify', ['user' => $this->user]));
        return $this;
    }

    public function accountVerifySuccess()
    {
        $this->email->setSubject('Hesabınız Doğrulandı');
        $this->email->setMessage(view('admin/email/account-verify-success', ['user' => $this->user]));
        return $this;
    }

    public function passwordForgot()
    {
        $this->email->setSubject('Şifre Sıfırlama Talebi');
        $this->email->setMessage(view('admin/email/password-forgot', ['user' => $this->user]));
        return $this;
    }

    public function passwordChangeSuccess()
    {
        $this->email->setSubject('Şifre Başarılı Şekilde Yenilendi');
        $this->email->setMessage(view('admin/email/password-change-success', ['user' => $this->user]));
        return $this;
    }

    public function send()
    {
        return $this->email->send();
    }


}