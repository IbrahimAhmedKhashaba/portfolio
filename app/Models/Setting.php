<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    //
    use HasTranslations;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'birthdate',
        'address',
        'position',
        'cv',
        'location',
        'facebook',
        'instagram',
        'linkedin',
        'github',

        'hours_worked',
        'client_count',
        'cofe_drinked',
    ];
}
