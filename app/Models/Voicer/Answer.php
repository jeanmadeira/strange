<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;
    protected $table = 'voicer_answer';
    protected $fillable = ['type', 'label', 'value', 'user_id'];

    public function question()
    {
        return $this->belongsTo('App\Models\Voicer\Question');
    }
}
