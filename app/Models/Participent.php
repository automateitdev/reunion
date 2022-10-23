<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sabberworm\CSS\Value\Size;

class Participent extends Model
{
    use HasFactory;

    protected $fillable = [
        'add_id',
        'batch_id',
        'cat_id',
        'pay',
        'name',
        'g_name',
        'email',
        'mobile',
        'fb_link',
        'address',
        'thana',
        'district_id',
        'division_id',
        'blood_id',
        'dress_cat_id',
        'size_id',
        'photo',
        'organization',
        'designation',
        'org_address',
        'status'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function size()
    {
        return $this->belongsTo(Tshirt::class, 'size_id');
    }
    public function dress()
    {
        return $this->belongsTo(DressCategory::class, 'dress_cat_id');
    }
    public function blood()
    {
        return $this->belongsTo(Blood::class, 'blood_id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'pay');
    }
}
