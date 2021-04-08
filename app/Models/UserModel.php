<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = UserEntity::class;
    protected $useSoftDelete = true;

    protected $allowedFields = [
        'group_id', 'first_name', 'sur_name', 'email', 'password', 'verify_key',
        'verify_code', 'bio', 'status', 'deleted_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    //todo: Grup tablosı oluşturulduğunda group_id kurallara eklenecek

    // Validation
    protected $validationRules = [

        'first_name' => 'required|string|min_length[3]',
        'sur_name' => 'required|string|min_length[2]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required',
        'verify_key' => 'required|alpha',
        'verify_code' => 'numeric|min_length[6]',
        'status' => 'required'
    ];

    //todo: Grup tablosı oluşturulduğunda group_id mesajlara eklenecek
    protected $validationMessages = [

        'first_name' => [
            'required' => 'User.model.validation.first_name.required',
            'string' => 'User.model.validation.first_name.string.',
            'min_length' => 'User.model.validation.first_name.min_length',
        ],
        'sur_name' => [
            'required' => 'User.model.validation.sur_name.required',
            'string' => 'User.model.validation.sur_name.string.',
            'min_length' => 'User.model.validation.sur_name.min_length',
        ],

        'email' => [
            'required' => 'User.model.validation.email.required',
            'valid_email' => 'User.model.validation.email.valid_email',
            'is_unique' => 'User.model.validation.email.is_unique'
        ],
        'password' => [
            'required' => 'User.model.validation.password.required',
        ],
        'verifiy_key' => [
            'required' => 'User.model.validation.verify_key.required',
            'alpha' => 'User.model.validation.verify_key.alpha'
        ],
        'verifiy_code' => [
            'numeric' => 'User.model.validation.verify_code.numeric',
            'min_length' => 'User.model.validation.verify_code.min_length'
        ],
        'status' => [
            'required' => 'User.model.validation.status.required'
        ]
    ];
}
