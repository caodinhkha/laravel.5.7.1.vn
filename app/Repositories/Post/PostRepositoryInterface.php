<?php
/**
 * Created by PhpStorm.
 * User: phongtx
 * Date: 10/1/18
 * Time: 3:18 PM
 */

namespace App\Repositories\Post;

/**
 * Interface PostRepositoryInterface
 *
 * @package App\Repositories\Post
 */
interface PostRepositoryInterface
{
    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished();

    /**
     * Get post only published
     * @return mixed
     */
    public function findOnlyPublished($id);
}