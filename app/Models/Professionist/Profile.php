<?php

namespace App\Models\Professionist;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $primaryKey = 'profile_id';
    protected $fillable = ['curriculum', 'pic', 'phone', 'profession_id', 'address'];

    public function professions()
    {
        return $this->belongsToMany(Profession::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
