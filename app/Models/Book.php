<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Book extends Model
{
    use UUID, HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'isbn',
        'value',
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
