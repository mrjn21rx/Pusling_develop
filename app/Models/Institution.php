<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'email', 'phone'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
