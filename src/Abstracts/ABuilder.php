<?php

namespace PC\Abstracts;

use PC\Databases\Model;
use PC\Traits\SQLBuilder;

abstract class ABuilder {

    use SQLBuilder;

    protected Model $model;

    public function __construct(Model $model) {
        $this->setModel($model);
	}

    public function setModel(Model $model):void {
        $this->model = $model;
    }

}