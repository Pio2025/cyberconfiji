<?php

namespace App\Models;

use CodeIgniter\Model;

class AttendeeModel extends Model
{
    protected $table            = 'attendees';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['full_name', 'organisation', 'email'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'full_name'    => 'required|min_length[2]|max_length[100]',
        'organisation' => 'required|min_length[2]|max_length[150]',
        'email'        => 'required|valid_email|max_length[150]|is_unique[attendees.email]',
    ];
    protected $validationMessages   = [
        'full_name' => [
            'required' => 'Please enter your full name.',
        ],
        'organisation' => [
            'required' => 'Please enter your organisation.',
        ],
        'email' => [
            'required'   => 'Please enter your email address.',
            'valid_email' => 'Please enter a valid email address.',
            'is_unique'  => 'This email address has already registered to attend.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
