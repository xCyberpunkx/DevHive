<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // Define fillable attributes for mass assignment
    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    // Scope for filtering listings based on tags and search query
    public function scopeFilter($query, array $filters) {
        // Filter by tag if provided
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        // Filter by search query if provided
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Define relationship to User model
    public function user() {
        return $this->belongsTo(User::class);
    }
}
