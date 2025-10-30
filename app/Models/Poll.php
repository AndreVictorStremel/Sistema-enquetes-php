<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{
    use HasFactory;

    // Permite que 'title' seja preenchido em massa
    protected $fillable = ['title'];

    // A relação: uma enquete (Poll) TEM MUITAS opções (Options)
    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }
}
