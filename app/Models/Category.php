<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App\Models
 */
class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = ['id'];

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post() {
        return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }

    /**
     * @param        $arrData
     * @param string $type
     * @param int    $parent
     * @param int    $level
     * @param        $arrResult
     */
    public static function recursive($arrData, $type = 'id', $parent = 0, $level = 0, &$arrResult) {
        if (count($arrData) > 0) {
            foreach ($arrData as $key => $val) {
                if ($parent == $val['parent_id']) {
                    $val['level'] = $level;
                    $arrResult[$key] = $val;
                    switch($type){
                        case 'id':
                            $_parent = $val['id'];
                            break;
                        case 'menu_id':
                            $_parent = $val['menu_id'];
                            break;
                    }
                    unset($arrData[$key]);
                    self::recursive($arrData, $type, $_parent, $level + 1, $arrResult);
                }
            }
        }
    }
}
