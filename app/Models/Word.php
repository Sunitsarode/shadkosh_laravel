<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public $table = 'words';

    public $fillable = [
        'word',
        'gender',
        'plurals',
        'status'
    ];

    protected $casts = [
        'word' => 'string',
        'gender' => 'string',
        'plurals' => 'string',
        'status' => 'integer'
    ];

    public static array $rules = [
        'word' => 'required',
        'gender' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
