<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends User
{
    use HasFactory;
    protected $table = 'enseignants';
    public function isTeacher() {
        return true;
    }
}
