<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{

    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function selectFilter($filters)
    {
        $this->model = $this->model->selectRaw($filters);
    }

    public function selectConditions($conditions)
    {
        $expressions = explode(';', $conditions);

        foreach ($expressions as $e) {
            $exp = explode(':', $e);
            $this->model = $this->model->where($exp[0], $exp[1], $exp[2]); //campo do meio ele entende como condição
        }
    }

    public function getResult()
    {
        return $this->model;
    }
}
