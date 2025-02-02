<?php

namespace App\Models;

use PC\Databases\Model;

class Model extends Model {

    protected $connection = "";
    protected $schema = "";
    protected $table = "";
    protected $primaryKey = "_id";

    protected $definition = [
        "_id"=>"varchar",
        "_number"=>"integer",
        "_decimal"=>"decimal",
        "_boolean"=>"boolean",
        "_text"=>"text",
        "_date"=>"date",
        "_datetime"=>"timestamp"
    ];

}
?>