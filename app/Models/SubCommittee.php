<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCommittee extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcom_id',
        'name',
        'designation',
        'mobile_no',
        'email',
        'image'
    ];
    public function sublist()
    {
        return $this->belongsTo(Subcommetteelist::class, "subcom_id");
    }
}
