<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Officer_User extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = 'officer_users';

    protected $fillable = [
        'officer_name',
        'position',
        'officer_email',
        'barangay_assign',
        'password',
        'officer_condition'
    ];

    public function getAuthIdentifierName()
    {
        return 'officer_email'; 

    protected $hidden = [
        'password', 
        'remember_token',
    ];
}
