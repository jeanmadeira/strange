<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'voicer_group';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Voicer\Question');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function group_questions()
    {
        return $this->hasMany('App\Models\Voicer\GroupQuestion');
    }
}
