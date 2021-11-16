<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factuur extends Model
{
    use HasFactory;
    protected $table = "facturen";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'business_id',
        'factuur_number',
        'date',
        'to',
    ];

    public function business() {
        return $this->belongsTo(Business::class);
    }
}
