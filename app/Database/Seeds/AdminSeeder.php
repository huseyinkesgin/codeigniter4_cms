<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class AdminSeeder extends Seeder
{
	public function run()
	{
	    helper('text');
		$data = [
		  'group_id' =>'null',
          'first_name' => 'Hüseyin',
          'sur_name' => 'KESGİN',
          'email' => 'admin@admin.com',
          'password' => password_hash('123',PASSWORD_DEFAULT),
          'verify_key' => random_string('alpha',64),
          'verify_code' => random_int(100000,999999),
          'bio'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
          'status' => 'USER_ACTIVE',
        ];

		$this->db->table('users')->insert($data);
	}
}
