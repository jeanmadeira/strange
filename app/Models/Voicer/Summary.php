<?php

namespace App\Models\Voicer;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Summary extends Model
{
    use SoftDeletes, Sluggable;
    protected $table = 'voicer_summary';
    protected $fillable = ['name', 'title', 'has_trigger', 'survey_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }

    public function survey()
    {
        return $this->belongsTo('App\Models\Voicer\Survey');
    }

    public function pages()
    {
        return $this->hasMany('App\Models\Voicer\Page');
    }

    public function sluggable(): array
    {
        return ['slug' => ['source' => 'name']];
    }
}
