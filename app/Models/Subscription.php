<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;


    protected $fillable = ["type", "user_id", "start", "end", "created_at", "updated_at"];

    const TYPE_MINI = 'mini';
    const TYPE_STANDARD = 'standard';
    const TYPE_KLUB = 'klub';

    /**
     * @param $value
     * @return false|string
     */
//    public function getStartAttribute($value) {
//        return date('d/m/Y', strtotime($value));
//    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

//    public function getEndAttribute($value) {
//        return date('H:m  d/m/Y', strtotime($value));
//    }

}
