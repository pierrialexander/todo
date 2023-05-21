<?php

namespace App\Models;

use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model de Categorias
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color',
        'user_id'
    ];

    /**
     * Uma categoria SEMPRE vai pertencer a um usuário
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Uma categoria pode ter muitas tarefas
     */
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
