<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		/*$model = new UserModel();
		$users = $model->findAll();

		foreach ($users as $user) {
		    print_r($user->getCreatedAt(true));

		    echo "<br>";
		}*/
	echo base_url();
	}
}
