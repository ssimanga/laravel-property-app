<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Type',
        'for',
        'description',
        'Photo',
        'Address',
        'Price',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
