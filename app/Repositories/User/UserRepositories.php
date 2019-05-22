<?php

namespace App\Repositories\user;

use App\User;
use App\Repositories\Base\BaseRepositories\RepositoryInterface;


class UserRepositories implements RepositoryInterface

{

  public function GetUserWhere(array $terms ){

        return  User::where($terms)->get()->take(1000);

  }


}
