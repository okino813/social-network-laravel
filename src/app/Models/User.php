<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Post;
use App\Models\Role;
use App\Models\Comment;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'image',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
// nom au pluriel car un user peut poster plusieurs commentaires
// cardinalité 0,n
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
// nom de la fonction au singulier car 1 seul rôle en relation
// cardinalité 1,1
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
//charger automatiquement le rôle de l'utilisateur
    protected $with = ['role'];
    public function isAdmin()
    {
        return $this->role_id == 2;
    }
}
