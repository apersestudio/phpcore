<?php

namespace App\Models;

use PC\Databases\Model;

class MasterUserModel extends Model {

    protected $connection = "master";
    protected $schema = "public";
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $sequence = "user_user_id_seq";

    /** Definition as */
    protected $definition = [
        "user_id"=>"string",
        "user_name"=>"string",
        "user_email"=>"string",
        "user_password"=>"string",
        "created_at"=>"timestamp",
        "updated_at"=>"timestamp"
    ];

    protected $relations = [
        "tokens"=>[
            "foreignKey"=>"token_tokenable_id",
            "localKey"=>"user_id",
            "model"=>"App\Models\TokensModel"
        ],
        "sessions"=>[
            "foreignKey"=>"session_iduser",
            "localKey"=>"user_id",
            "model"=>"App\Models\SessionsModel"
        ]
    ];

}
?>