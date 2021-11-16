<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactuurServices extends Model
{
    use HasFactory;
    protected $table = "factuur_services";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'factuur_id',
        'service_title',
        'service_desc',
        'price',
        'btw_percentage',
    ];

    public function factuur() {
        return $this->belongsTo(Factuur::class);
    }
}
