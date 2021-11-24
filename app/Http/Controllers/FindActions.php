<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class FindActions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Action[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $action = Action::all();
        $category_id = $request->get('category_id');
        $gender_id = $request->get('gender_id');
        if ($category_id != 0 && $gender_id != 0) {
            $action = $action->where('category_id', '=', $category_id)
                ->where('gender_id', '=', $gender_id);
        } elseif ($category_id != 0) {
            $action = $action->where('category_id', '=', $category_id);
        } elseif ($gender_id != 0) {
            $action = $action->where('gender_id', '=', $gender_id);
        } else {
            return $action;
        }
        return $action;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Action::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
