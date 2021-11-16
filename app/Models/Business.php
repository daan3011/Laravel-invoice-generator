<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $table = 'businesses';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        //'user_id',
        'name',
        'slogan',
        'kvk',
        'btw',
        'logo',
    ];
    
    public function user() {
        return $this->belongsTo(user::class);
    }
}
