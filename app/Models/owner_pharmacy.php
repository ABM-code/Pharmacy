<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner_pharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
     ];
     public function owner(){
        return $this->belongsTo(head_Pharmacy::class , 'phar_id');
    }
}
