<?php

namespace App\Models;

use App\Enums\LogActionEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'action', 'action_on', 'dsc'
    ];

    protected $casts = [
        'action' => LogActionEnum::class
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
