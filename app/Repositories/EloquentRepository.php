<?php
/**
 * Created by PhpStorm.
 * User: phongtx
 * Date: 10/1/18
 * Time: 2:19 PM
 */

namespace App\Repositories;

/**
 * Class EloquentRepository
 *
 * @package App\Repositories
 */
Abstract class EloquentRepository implements RepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $_model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    Abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->_model = app()->make($this->getModel());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll()
    {
        return $this->_model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->_model->find($id);
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create( array $attributes)
    {
        return $this->_model->create($attributes);
    }

    /**
     * Update
     * @param       $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->_model->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     * @param $id
     * @return bool|mixed
     */
    public function delete($id)
    {
        $result = $this->_model->find($id);
        if ($result) {
            $result->delete();
            return $result;
        }
        return false;
    }
}