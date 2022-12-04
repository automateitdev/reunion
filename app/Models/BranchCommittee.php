<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchCommittee extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id',
        'name',
        'designation',
        'mobile_no',
        'email',
        'image'
    ];
    public function branchlist()
    {
        return $this->belongsTo(Branchlist::class, "branch_id");
    }
}
