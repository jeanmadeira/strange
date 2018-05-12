<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collector extends Model
{
    use SoftDeletes;
    protected $table = 'voicer_collectors';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }

    public function params()
    {
        return $this->hasMany('App\Models\Voicer\CollectorParam');
    }

    public function summary()
    {
        return $this->belongsTo(Summary::class);
    }
}
