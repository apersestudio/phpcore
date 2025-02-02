<?php

namespace App\Models;

use PC\Databases\Model;

class ClientUserModel extends Model {

    protected $connection = "client";
    protected $schema = "public";
    protected $table = "users";
    protected $primaryKey = "user_id";

    protected $definition = [
        "user_id"=>"varchar",
        "user_number"=>"integer",
        "user_decimal"=>"decimal",
        "user_boolean"=>"boolean",
        "user_text"=>"text",
        "user_date"=>"date",
        "user_datetime"=>"timestamp"
    ];

}
?>