<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public $table = 'data';

    protected $fillable = [
        'id_user',
        'nama',
        'telepon',
        'kavling',
        'tipe',
        'spk',
        'progres',
        'cicilan',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);

    }
}
