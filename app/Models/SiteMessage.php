<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Wanglelecc\Laracms\Models\Traits\WithCommonHelper;
//use Wanglelecc\Laracms\Events\BehaviorLogEvent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;


/**
 * 文章模型
 *
 * Class SiteMessage
 * @package App\Models
 */
class SiteMessage extends Model
{
//    use SoftDeletes;
//    protected $table = 'settings';
//
    public static function getDetails(){
        return DB::table('settings')->pluck("value", "key");
    }


}
