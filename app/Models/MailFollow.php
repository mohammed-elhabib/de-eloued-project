<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailFollow extends Model
{
    use HasFactory;
    protected  $fillable = [
        "number",
        "source",
        "sourceTarget",
        "title",
        "date",
        "path",
        "note",
        "status"
    ];

    public function  actors()
    {

        return $this->belongsToMany(Actor::class, "mail_follows_actors");
    }
}
