<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kwitantie extends Model
{
    use HasFactory;
    protected $table = "kwitanties";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'kwitantie_number',
        'date',
        'to',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
