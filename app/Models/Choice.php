<?php

namespace App\Models;

use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
