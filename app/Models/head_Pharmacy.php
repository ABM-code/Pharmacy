<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class head_Pharmacy extends Model
{
    protected $fillable = [
        'name',
        'address',
        'owner',
        'phone',
        'reg_num',
     ];
    // public function user(){
    //     return $this->belongsTo(User::class , 'user_id');
    // }
    use HasFactory;
}
