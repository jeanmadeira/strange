<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupQuestion extends Model
{
    use SoftDeletes;

    protected $table = 'voicer_group_questions';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function question_rel()
    {
        return $this->belongsTo('App\Models\Voicer\Question');
    }

    public function question()
    {
        return $this->hasOne('App\Models\Voicer\Question', 'id', 'question_related');
    }

//    public function questions()
//    {
//        return $this->hasMany('App\Models\Voicer\Question');
//    }
}
