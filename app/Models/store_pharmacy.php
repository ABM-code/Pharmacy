<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_pharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'reg_num',
        'phar_id'
     ];
     public function branch(){
        return $this->belongsTo(head_Pharmacy::class , 'phar_id');
    }
}
