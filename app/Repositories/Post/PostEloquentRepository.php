<?php
/**
 * Created by PhpStorm.
 * User: phongtx
 * Date: 10/1/18
 * Time: 3:19 PM
 */

namespace App\Repositories\Post;
use App\Repositories\EloquentRepository;

/**
 * Class PostEloquentRepository
 *
 * @package App\Repositories\Post
 */
class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{
    /**
     * Get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Post::class;
    }

    /**
     * Get all posts only published
     * @return mixed|void
     */
    public function getAllPublished()
    {
        $result = $this->_model->where('is_published', 1)->get();
    }

    /**
     * Get post only published
     * @param $id
     * @return mixed|void
     */
    public function findOnlyPublished($id)
    {
        $result = $this->_model->where('id', $id)->where('is_published', 1)->first();
    }
}