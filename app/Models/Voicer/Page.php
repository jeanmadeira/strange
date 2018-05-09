<?php

namespace App\Models\Voicer;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes, Sluggable;
    protected $table = 'voicer_page';
    protected $fillable = ['title', 'description', 'order', 'is_random', 'user_id', 'summmary_id'];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'voicer_page_question')->using(PageQuestionPivot::class)->withTimestamps();
    }

    public function sluggable(): array
    {
        return ['slug' => ['source' => 'title']];
    }
}
