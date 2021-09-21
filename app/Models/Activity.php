<?php

namespace App\Models;

use App\Relations\HasManyArray;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $casts = [
        'user_ids' => 'array'
    ];

    public function users(): HasManyArray
    {
        return $this->hasManyArray(User::class, 'id', 'user_ids');
    }

    public function hasManyArray($related, $foreignKey = null, $localKey = null): HasManyArray
    {
        $instance = new $related;
        $query = $instance->newQuery();

        return new HasManyArray($query, $this, $foreignKey, $localKey);
    }
}
