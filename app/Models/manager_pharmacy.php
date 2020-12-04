<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manager_pharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'branch_id'
     ];
     public function managerBranch(){
        return $this->belongsTo(branch_Pharmacy::class , 'branch_id');
    }
}
