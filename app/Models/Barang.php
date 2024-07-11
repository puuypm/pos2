<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id_category', 'nama_barang', 'satuan', 'qty', 'harga'];

    //object relation mapping / sequlize
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
