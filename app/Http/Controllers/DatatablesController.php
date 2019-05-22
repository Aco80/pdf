<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\user;
use App\Repositories\User\UserRepositories;

class DatatablesController extends Controller
{
  /**
 * Displays datatables front end view
 *
 * @return \Illuminate\View\View
 */
 Protected $Users;

 public function __construct(UserRepositories $Users){

   $this->Users = $Users;
 }
/**
 * Process datatables ajax request.
 *
 * @return \Illuminate\Http\JsonResponse
 */
public function UserData()
{
/*
  $WhereTerms = [
    ['profesion_id','1']
    ];

      $result = DB::table('users')
        ->join('profesion','users.profesion_id','=','profesion.id')
        ->select('users.*','profesion.nombre as profesion')
        ->limit(2000)
        ->get();

return Datatables::of($result)
        ->addColumn('btn','partials/actions')
        ->rawColumns(['btn'])
        ->make(true);
*/

    $result = datatables()
            ->eloquent(User::query())
            ->addColumn('btn','partials/actions')
            ->rawColumns(['btn'])
            ->toJson();

    return $result;

}
}
