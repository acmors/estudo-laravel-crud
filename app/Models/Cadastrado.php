<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastrado extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'telefone', 'idade', 'curso', 'turno'];
}
