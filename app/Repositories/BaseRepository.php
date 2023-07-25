<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

abstract class BaseRepository
{
  public function __construct()
  {
  }

  public abstract function model();

  /**
   * Get the last saved model
   *
   * @param array $columns
   * @return Model
   */
  public function getLatest(array $columns = ['*']): Model|null
  {
    return $this->model()
      ->latest()
      ->first($columns);
  }

  /**
   * Find a model by ID
   *
   * @param integer $id
   * @param array $columns
   * @return Model
   */
  public function find(int $id, array $columns = ['*']): Model
  {
    return $this->model()->find($id, $columns);
  }

  /**
   * Get all entries
   *
   * @param array $conditions
   * @return Collection
   */
  public function all(array $conditions = []): Collection
  {
    return $this->model()->where($conditions)->get();
  }

  /**
   * Create a new model
   *
   * @param array $data
   * @return Model
   */
  public function create(array $data): Model
  {
    $class = get_class($this->model());
    return $class::create($data);
  }

  /**
   * Updates a model by id
   *
   * @param integer $id
   * @param array $data
   * @return boolean
   */
  public function update(Model|int $model, array $data): bool
  {
    if ($model instanceof Model) {
      return $model->update($data);
    }
    return $this->find($model)->update($data);
  }

  /**
   * Delete a model by id
   *
   * @param integer $id
   * @return boolean
   */
  public function destroy(Model|int $model): bool
  {
    if ($model instanceof Model) {
      return $model->delete();
    }
    return $this->find($model)->delete();
  }

  /**
   * Restore a model by id
   *
   * @param integer $id
   * @return boolean
   */
  public function restore(int $id): bool
  {
    $class = get_class($this->model());
    return $class::onlyTrashed()->where('id', $id)->restore();
  }

  /**
   * Permanently delete a model by id
   *
   * @param integer $id
   * @return boolean
   */
  public function forceDelete(int $id): bool
  {
    $class = get_class($this->model());
    return $class::onlyTrashed()->where('id', $id)->forceDelete();
  }
}
