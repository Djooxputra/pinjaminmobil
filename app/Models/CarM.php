<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarM extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cars';

    protected $fillable = [
        "brand",
        "model",
        "noplat",
        "cost",
    ];

    public $timestamps = false;

    public function rent()
    {
        return $this->hasMany(RentM::class);
    }
}
