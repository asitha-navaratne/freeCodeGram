<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function profileImage() {
        $path = ($this->image) ?  $this->image : 'profile/wGqwZUi4tUF0AYIgijWUh3qP0ZXvUUuUl5ZCiHpq.jpg';

        return '/storage/' . $path;
    }
}
