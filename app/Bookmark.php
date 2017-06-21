<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 4/6/2017
 * Time: 2:12 PM
 */


namespace app;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmark';
    protected $primaryKey = 'bm_id';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'bm_id',
        'user_id',
        'event_id'
    ];
    public function user(){
        return $this->belongsTo('app\User', 'user_id', 'id');
    }

    public function event(){
    return $this->belongsTo('app\Event', 'event_id', 'event_id');
}

}
