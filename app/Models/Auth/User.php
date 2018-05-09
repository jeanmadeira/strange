<?php

namespace App\Models\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\Auth\Profile');
    }

    public function social()
    {
        return $this->hasMany('App\Models\Auth\Social');
    }

    public function surveys()
    {
        return $this->hasMany('App\Models\Voicer\Survey');
    }

    public function summaries()
    {
        return $this->hasMany('App\Models\Voicer\Summary');
    }

    public function collectors()
    {
        return $this->hasMany('App\Models\Voicer\Collector');
    }

    public function collector_params()
    {
        return $this->hasMany('App\Models\Voicer\CollectorParam');
    }

    public function pages()
    {
        return $this->hasMany('App\Models\Voicer\Page');
    }

    public function page_contents()
    {
        return $this->hasMany('App\Models\Voicer\PageQuestionPivot');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Voicer\Answer');
    }
}
