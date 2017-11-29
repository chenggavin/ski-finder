<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model {


    public function users() {

        return $this->belongsToMany('App\User', 'resort_user', 'resort_id', 'user_id');

    }
}
