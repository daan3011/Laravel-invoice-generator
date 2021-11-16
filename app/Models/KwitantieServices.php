<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KwitantieServices extends Model
{
    use HasFactory;
    protected $table = "kwitantie_services";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kwitantie_id',
        'service_title',
        'service_desc',
        'price',
    ];

    public function factuur() {
        return $this->belongsTo(Kwitantie::class);
    }
}
