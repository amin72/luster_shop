<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class PasswordReset extends Model
{
    use HasFactory;

    protected $primaryKey = 'phone';
    protected $fillable = ['phone', 'token', 'token_expires_at'];

    public $timestamps = false;


    public function token_expired() {
        return $this->token_expires_at < Carbon::now();
    }
}
