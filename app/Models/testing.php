<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
    use HasFactory;

    protected $fillable = [
        'nota',
        'tanggal',
        'nominal',
    ];
    
    protected $connection = 'mysql';
    protected $table = 'testing';

    public function customer()
    {
        return $this->BelongsTo(customer::class,'kode','');
    }

}
