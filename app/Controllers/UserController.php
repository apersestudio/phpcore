<?php

namespace App\Controllers;

use App\Models\MasterUserModel;
use PC\Databases\Builders\JoinBuilder;
use PC\Databases\Builders\WhereBuilder;
use Ulid\Ulid;

use Faker\Factory;

class UserController {

    public function index() {
        echo "LIST";
    }

    public function show() {
        echo "SHOW";
    }

    public function create() {
        echo "CREATE";
    }

    public function update() {
        echo "UPDATE";
    }

    public function delete() {
        echo "DELETE";
    }

    public function command($id, $command) {

        $user = new MasterUserModel();
        $userData = $user->with(["tokens", "sessions"])->find($id);

        return $userData;
        
    }

}

?>