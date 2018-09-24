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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post() {
        return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }

    public function getDetailCategoryById($id) {

    }
    public function getListCategory($arrParam) {
        $list   = [];
        $result = $this->select('*')->where('parent_id', 0)->get()->toArray();
        foreach ($result as $value) {
            $list[$value['id']] = $value['title'];
            if ($this->checkChild($value['id']) > 0) {
                $this->listCateExceptRoot($value['id'], $list);
            }
        }
        return $list;
    }
}
