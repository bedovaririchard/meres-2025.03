<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    use HasFactory;
    public $table = 'ingatlanok';
    public $timestamps = false;
    // public $fillable = ['kategoria'];
    public $guarded = [];

    /**
     * Get the kategoria that owns the Ingatlan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kategoria');
    }
}
