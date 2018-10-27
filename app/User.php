<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * establish one to many relationship between user and notes...
     */
    public function notes () {
        return $this->hasMany(UserNote::class);
    }

    /**
     * Method to add new Note to the user_notes table.
     *
     * @var text(string)
     */
    public function addNote ($note, $user_id) {
        return UserNote::create(['note' => $note, 'user_id' => $user_id]);
    }
}
