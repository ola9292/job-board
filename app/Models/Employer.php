<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id','logo'];
    protected $table = 'employers';
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

}
