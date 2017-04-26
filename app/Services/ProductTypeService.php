<?php

namespace App\Services;

use App\Models as Models;
use App\Models\ProductType;
use App\Repositories\ProductTypeRepository;

class ProductTypeService implements ProductTypeRepository {

    private $model;

    public function __construct(ProductType $model) {
        $this->model = $model;
    }

    public function getAll() {
        return $this->model->all();
    }

    public function getName() {
        return $this->model->type_name;
    }

    public function getById($id) {
        return $this->model->find($id);
    }

    public function create(array $attribute) {
        return $this->model->create($attribute);
    }

    public function update($id, array $attribute) {
        return $this->model->find($id)->update($attribute);
    }

    public function delete($id) {
        return $this->model->find($id)->delete();
    }
    
}
