<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        // 'user_id',
        'name',
        'email',
        'telephone_no',
        'feedback_type',
        'feedback'
    ];
}
