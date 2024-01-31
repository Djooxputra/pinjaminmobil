<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RsvM extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservations';

    public function car()
    {
        return $this->belongsTo(CarM::class);
    }

    public function user()
    {
        return $this->belongsTo(UserM::class);
    }
}
