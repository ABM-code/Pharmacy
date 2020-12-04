<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_pharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'marital_status',
        'phone',
        'owner_id',
        'branch_id'
     ];
     public function empowner(){
        return $this->belongsTo(owner_pharmacy::class , 'owner_id');
    }
    public function empbranch(){
        return $this->belongsTo(branch_Pharmacy::class , 'branch_id');
    }
}
