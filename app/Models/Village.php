<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Village extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "postcode",
        "subdistrict_id"
    ];

    public function subdistrict()
    {
        return $this->belongsTo(Subdistrict::class);
    }
}
