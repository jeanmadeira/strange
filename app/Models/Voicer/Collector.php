<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collector extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'voicer_collectors';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function summary()
    {
        return $this->belongsTo('App\Models\Voicer\Summary');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function params()
    {
        return $this->hasMany('App\Models\Voicer\CollectorParam');
    }

}
