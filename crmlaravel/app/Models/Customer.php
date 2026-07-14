<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'email', 'phone'])]
#[Hidden(['phone'])]
class Customer extends Model
{
    //

    Use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];
}
