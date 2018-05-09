<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    protected $table = 'voicer_question';
    protected $fillable = ['type', 'is_required', 'label', 'user_id', 'order', 'related_question'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function relatedQuestion()
    {
        return $this->hasMany(Question::class, 'related_question_id');
    }
}
