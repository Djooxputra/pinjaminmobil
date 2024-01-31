<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $fillable = [
        "name",
        "address",
        "phone",
        "sim",
        "email",
        "password",
        "role",
    ];

    public function reservations()
    {
        return $this->hasMany(RsvM::class);
    }

    public function rent()
    {
        return $this->hasMany(RentM::class);
    }
}
