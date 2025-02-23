<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Leverancier extends Model
{
    /** @use HasFactory<\Database\Factories\LeverancierFactory> */
    use HasFactory;

    protected $table = 'leveranciers'; // Ensure the table name is correct

    protected $fillable = [
        'Naam',
        'Contactpersoon',
        'Leveranciernummer',
        'Mobiel',
        'IsActief',
        'Opmerkingen',
        'DatumAangemaakt',
        'DatumGewijzigd'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
