<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends Model
{
    use HasFactory;

    // Permite que 'name' e 'poll_id' sejam preenchidos
    protected $fillable = ['name', 'poll_id'];

    // A relação: uma opção (Option) PERTENCE A uma enquete (Poll)
    public function poll(): BelongsTo
    {
        return $this->belongsTo(Poll::class);
    }
}
