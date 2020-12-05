<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine_pharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'productio_date',
        'expiry_date',
        'serial',
        'active_substance',
        'side_effects',
        'manufacturer',
        'supplier',
        'price',
        'medicine_id',
     ];
     public function medicine(){
        return $this->belongsTo(items_pharmacy::class , 'medicine_id');
}
