<?php

use App\Validators\UserValidator;
use Zizaco\Entrust\EntrustRole;

class UserController extends Controller {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		$user = User::all();

        return View::make('user.index', compact('user'));
	}

	public function create()
	{
    	if (Input::has('_token'))
    	{
			if ($this->user->_create())
			{
		        return 'success';
			}
			else
		 	{
			    return $this->user->errors();
			}
    	}

        return View::make('user.create');
    }

	public function edit()
	{

		if(Input::has('_token'))
    	{
			$user = User::find(Input::get('id'));

			$user->nombre = Input::get('nombre');
			$user->apellido = Input::get('apellido');
			$user->email = Input::get('email');
			$user->password = Input::get('password');

			$user->save();

			return 'success';
    	}

		$user = User::find(Input::get('id'));

        return View::make('user.edit', compact('user'));
	}

	public function delete()
	{
		$user = $this->user->destroy(Input::get('id'));

		if ($user)
		{
		    return 'success';
		}

		return 'error';
	}


	public function assigned($user_id)
	{
		$assigned = Assigned_roles::where('user_id', $user_id)
        ->join('roles', 'assigned_roles.role_id', '=', 'roles.id')->get();

        return $assigned;
	}


	public function no_assigned($user_id)
	{
        $no_assigned = EntrustRole::whereNotIn('id', function($query) use ($user_id)
        {
            $query->select(DB::raw('role_id'))->from('assigned_roles')->whereRaw("user_id = ?", array($user_id));
        })->lists('name', 'id');

        return $no_assigned;
	}


	public function users_list()
	{
		$table = 'users';

		$columns = array("username","nombre","apellido","email","status");

		$Searchable = array("username","nombre","apellido","email","status");

		echo TableSearch::get($table, $columns, $Searchable);
	}

}
