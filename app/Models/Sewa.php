<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table =  "tb_penyewa";

    protected $primaryKey = "sewa_id";

    protected $guarded = [];

    protected $fillable = ['sewa_nama', 'sewa_nohp', 'sewa_alamat', 'sewa_waktu', 'sewa_status', 'sewa_id_cat', 'sewa_id_user'];

    public static $rules = [
        'sewa_id_cat' => 'required',
    ];

    protected $casts = [
    'sewa_status' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'sewa_id_cat', 'cat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'sewa_id_user', 'id');
    }
}
