<?php

namespace App\Models\Voicer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CollectorParam extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'voicer_collector_params';

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
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collector()
    {
        return $this->belongsTo('App\Models\Voicer\Collector');
    }

}
