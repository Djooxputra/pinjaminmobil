<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentM extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rents';

    public function car()
    {
        return $this->belongsTo(CarM::class);
    }

    public function user()
    {
        return $this->belongsTo(UserM::class);
    }

    public function reservation()
    {
        return $this->belongsTo(RsvM::class);
    }
}
