<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Prioduct1;
use App\Http\Requests\CreatePrioduct1Request;
use App\Http\Requests\UpdatePrioduct1Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\User;


class Prioduct1Controller extends Controller {

	/**
	 * Display a listing of prioduct1
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $prioduct1 = Prioduct1::with("user")->get();

		return view('admin.prioduct1.index', compact('prioduct1'));
	}

	/**
	 * Show the form for creating a new prioduct1
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $user = User::pluck("", "id")->prepend('Please select', 0);

	    
	    return view('admin.prioduct1.create', compact("user"));
	}

	/**
	 * Store a newly created prioduct1 in storage.
	 *
     * @param CreatePrioduct1Request|Request $request
	 */
	public function store(CreatePrioduct1Request $request)
	{
	    $request = $this->saveFiles($request);
		Prioduct1::create($request->all());

		return redirect()->route(config('quickadmin.route').'.prioduct1.index');
	}

	/**
	 * Show the form for editing the specified prioduct1.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$prioduct1 = Prioduct1::find($id);
	    $user = User::pluck("", "id")->prepend('Please select', 0);

	    
		return view('admin.prioduct1.edit', compact('prioduct1', "user"));
	}

	/**
	 * Update the specified prioduct1 in storage.
     * @param UpdatePrioduct1Request|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePrioduct1Request $request)
	{
		$prioduct1 = Prioduct1::findOrFail($id);

        $request = $this->saveFiles($request);

		$prioduct1->update($request->all());

		return redirect()->route(config('quickadmin.route').'.prioduct1.index');
	}

	/**
	 * Remove the specified prioduct1 from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Prioduct1::destroy($id);

		return redirect()->route(config('quickadmin.route').'.prioduct1.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Prioduct1::destroy($toDelete);
        } else {
            Prioduct1::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.prioduct1.index');
    }

}
