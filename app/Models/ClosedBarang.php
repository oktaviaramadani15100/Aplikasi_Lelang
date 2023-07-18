<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosedBarang extends Model
{
    use HasFactory;

    protected $table = 'closed_barang';
    protected $guarded = ['id'];

    protected $fillable = [
        'preview_item',
        'price',
        'foto',
        'short_description',
        'minimum_bid',
        'deskrpsi',
    ]; 
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
