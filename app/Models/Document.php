<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['titre','sujet','auteur','type','prix','categorie_id','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categorie()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
