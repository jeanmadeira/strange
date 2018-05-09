<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * @var string
     */
    protected $table = 'users_profile';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }
}
