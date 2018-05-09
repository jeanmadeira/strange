<?php

namespace App\Models\Voicer;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes, Sluggable;
    protected $table = 'voicer_survey';
    protected $fillable = ['name', 'title'];

    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }

    public function summaries()
    {
        return $this->hasMany('App\Models\Voicer\Summary');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
