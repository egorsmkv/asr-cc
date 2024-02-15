<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project.
 *
 * Represents a user in the system.
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];
}
