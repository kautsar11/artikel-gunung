<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['author'];

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query->where('nama_gunung', 'like', '%' . $search . '%')
            )
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
