<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasComidas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservas_comidas';

    use HasFactory;
}
