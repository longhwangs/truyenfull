<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use App\Interfaces\RepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasCriteria;
use App\Traits\HasScope;

abstract class BaseRepository implements RepositoryInterface
{
    use HasScope;
    use HasCriteria;

    protected $app;

    protected $model;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->resetModel();
        $this->resetScope();
        $this->resetCriteria();
    }

    abstract public function getModel();

    public function resetModel()
    {
        $model = $this->app->make($this->getModel());
        if (! $model instanceof Model) {
            throw RepositoryException::invalidModel();
        }
        return $this->model = $model;
    }
    
    /**
     * Load relations
     *
     * @param array $relations
     * @return self
     */
    public function with($relations)
    {
        $this->model = $this->model->with($relations);

        return $this;
    }

    /**
     * Prepare for querying
     *
     * @return void
     */
    private function prepareQuery()
    {
        $this->applyCriteria();
        $this->applyScope();
    }

    /**
     * Rescue the query after performed
     *
     * @return void
     */
    private function rescueQuery()
    {
        $this->resetModel();
        $this->resetScope();
        $this->resetCriteria();
    }

    /**
     * Find record by id
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id, array $columns = ['*'])
    {
        $this->prepareQuery();
        $result = $this->model->findOrFail($id, $columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Get all data of repository
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all(array $columns = ['*'])
    {
        $this->prepareQuery();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $result = $this->model->get($columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Get data of repository by pagination
     *
     * @param array $columns
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate(int $limit = null, array $columns = ['*'], $method = 'paginate')
    {
        $this->prepareQuery();
        $result = $this->model->$method($limit, $columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Get data of repository by pagination
     *
     * @param int|null $limit
     * @param array $columns
     * @param array $options
     * @return \Neolab\Paginator\CursorPaginator
     */
    public function cursorPaginate(int $limit = null, array $columns = ['*'], $options = [])
    {
        $this->prepareQuery();
        $result = $this->model->cursorPaginate($limit, $columns, $options);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Get data of repository by pagination
     *
     * @param array $columns
     * @return \Illuminate\Contracts\Pagination\Paginator
     */
    public function simplePaginate(int $limit = null, array $columns = ['*'])
    {
        return $this->paginate($limit, $columns, 'simplePaginate');
    }

    /**
     * Get all data of repository by field
     *
     * @param array $columns
     * @return \Illuminate\Support\Collection
     */
    public function findByField($field, $value, array $columns = ['*'])
    {
        $this->prepareQuery();
        $result = $this->model->where($field, $value)->get($columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Get all data of repository by condition
     *
     * @param array $columns
     * @return \Illuminate\Support\Collection
     */
    public function findWhereIn($field, $value, array $columns = ['*'])
    {
        $this->prepareQuery();
        $result = $this->model->whereIn($field, $value)->get($columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Create new model
     *
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $attributes)
    {
        $result = $this->model->newInstance($attributes);
        $result->save();

        $this->resetModel();

        return $result;
    }

    /**
     * Update the existed model
     *
     * @param mixed $id
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $attributes)
    {
        $this->applyScope();

        $result = $this->model->findOrFail($id);
        $result->fill($attributes);
        $result->save();

        $this->resetScope();
        $this->resetModel();

        return $result;
    }

    /**
     * Remove the existed model
     *
     * @param mixed $id
     * @return boolean
     */
    public function delete($id)
    {
        $this->prepareQuery();
        $result = $this->model->findOrFail($id);
        $this->rescueQuery();

        return $result->delete();
    }

    /**
     * Get first record of repository
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function first($columns = ['*'])
    {
        $this->prepareQuery();
        $result = $this->model->first($columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Retrieve first data by multiple fields
     * @param $where
     * @param array $columns
     * @return mixed
     * @throws RepositoryException
     */
    public function firstWhere($where, $columns = ['*'])
    {
        $this->applyCriteria();
        $this->applyScope();

        $model = $this->model->where($where)->first($columns);
        $this->resetModel();

        return $model;
    }

    /**
     * Retrieve first or fail data by multiple fields
     *
     * @param $where
     * @param array $columns
     * @return mixed
     * @throws RepositoryException
     */
    public function firstOrFailWhere($where, $columns = ['*'])
    {
        $this->applyCriteria();
        $this->applyScope();

        $model = $this->model->where($where)->firstOrFail($columns);
        $this->resetModel();

        return $model;
    }

    /**
     * Get first record of repository by field
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function firstByField($field, $value, array $columns = ['*'])
    {
        $this->model = $this->model->where($field, $value);

        return $this->first($columns);
    }

    /**
     * Get all data of repository by condition
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getWithCTE($columns = ['*'])
    {
        $this->prepareQuery();
        $result = $this->model->getWithCTE($columns);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Update or Create an entity in repository
     *
     * @param array $attributes
     * @param array $values
     *
     * @return mixed
     */
    public function updateOrCreate(array $attributes, array $values = [])
    {
        $this->prepareQuery();
        $result = $this->model->updateOrCreate($attributes, $values);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Count records
     * @return int
     */
    public function count()
    {
        $this->prepareQuery();
        $result = $this->model->count();
        $this->rescueQuery();

        return $result;
    }

    /**
     * Update multiple records
     *
     * @param array $attributes
     *
     * @return int
     */
    public function bulkUpdate(array $attributes)
    {
        $this->prepareQuery();
        $result = $this->model->update($attributes);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Pluck column
     *
     * @param string $column
     *
     * @return \Illuminate\Support\Collection
     */
    public function pluck($column)
    {
        $this->prepareQuery();
        $result = $this->model->pluck($column);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Insert new records
     *
     * @param array $values
     * @return boolean
     */
    public function insert(array $values)
    {
        return $this->model->insert($values);
    }

    /**
     * get query and bindings
     *
     * @return array
     */
    public function getRawQuery()
    {
        $this->prepareQuery();

        return [
            'sql'      => $this->model->toSql(),
            'bindings' => $this->model->getBindings()
        ];
    }

    /**
     * Chunk records
     *
     * @return bool
     */
    public function chunk(int $quantity, Closure $callback)
    {
        $this->prepareQuery();

        return $this->model->chunk($quantity, $callback);
    }

    /**
     * Delete multiple entities by given criteria.
     *
     * @return int
     */
    public function deleteAll($force = false)
    {
        $this->prepareQuery();
        if ($force) {
            $deleted = $this->model->forceDelete();
        } else {
            $deleted = $this->model->delete();
        }
        $this->rescueQuery();

        return $deleted;
    }

    /**
     * Delete multiple entities by condition.
     *
     * @return int
     */
    public function deleteWhere($where)
    {
        $this->prepareQuery();
        $deleted = $this->model->where($where)->delete();
        $this->rescueQuery();

        return $deleted;
    }

    /**
     * Check that records is exists
     *
     * @return bool
     */
    public function exists()
    {
        $this->prepareQuery();
        $result = $this->model->exists();
        $this->rescueQuery();

        return $result;
    }

    /**
     * Retrieve the sum of the values of a given column.
     *
     * @param string $column
     */
    public function sum(string $column)
    {
        $this->prepareQuery();
        $result = $this->model->sum($column);
        $this->rescueQuery();

        return $result;
    }

    /**
     * Add subselect queries to count the relations.
     *
     * @param  mixed  $relations
     * @return $this
     */
    public function withCount($relations)
    {
        $this->model = $this->model->withCount($relations);
        return $this;
    }

    /**
     * Add subselect queries to count the relations.
     *
     * @param  string  $relations
     * @param  array  $conditions
     * @return $model
     */
    public function whereHas($relations, $conditions)
    {
        $this->applyCriteria();
        $this->applyScope();

        $model = $this->model->whereHas($relations, function ($query) use ($conditions) {
            return $query->where($conditions);
        });
        $this->resetModel();

        return $model;
    }

    /**
     * ChunkId records
     *
     * @return bool
     */
    public function chunkById(int $quantity, Closure $callback)
    {
        $this->prepareQuery();

        return $this->model->chunkById($quantity, $callback);
    }
}
