<?php

namespace STS\Entities;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    protected $fillable = [
        'user_id', 'trip_date', 
        'from_address', 'from_json_address', 'from_lat', 'from_lng',
        'to_address', 'to_json_address', 'to_lat', 'to_lng',
        'state'
    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected $dates = ['created_at', 'updated_at', 'trip_date'];
    
    public function user()
    {
        return $this->belongsTo('STS\User', 'user_id');
    } 
}
