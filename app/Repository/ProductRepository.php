<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductRepository
{

    private $model;

    private $request;

    public function __construct(Model $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    public function selectFilter($filters)
    {
        return $this->model->selectRaw($filters);
    }

    public function selectConditions($conditions)
    {
        $expressions = explode(';', $conditions);

        $where = "";
        foreach ($expressions as $e) {
            $exp = explode(':', $e);
            $where = $this->model->where($exp[0], $exp[1], $exp[2]); //campo do meio ele entende como condição
        }

        return $where;
    }
}
