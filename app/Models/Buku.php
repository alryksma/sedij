<?php

namespace App\Models;

use App\Models\kategori;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Buku.php

    public function scopeFilter($query, $filter)
    {
        if (isset($filter['search']) && !empty($filter['search'])) {
            $query->where('judul_buku', 'like', '%' . $filter['search'] . '%');
        }

        // Tambahkan filter lainnya sesuai kebutuhan Anda

        return $query;
    }

}
