<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNote extends Model
{
    protected $table = 'user_notes'; 
    protected $guarded = ['note'];
    protected $fillable = ['note', 'user_id'];

    public function user() {
    	return $this->belongsTo(User::class, 'foreign_key');
    }
}
