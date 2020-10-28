<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::where('role', config('role.become_publisher'))->get();

        return view('admin.publisher-requests', compact('accounts'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Account::findOrFail($request->id)->update(['role' => config('role.publisher')]);
            Publisher::create([
                'name' => '',
                'address' => '',
                'phone' => '',
                'acocunt_id' => $request->id,
            ]);

            return trans('text.admin.publisher_request.store_success');
        } catch (ModelNotFoundException $e) {
            return trans('text.admin.publisher_request.store_fail');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $account = Account::findOrFail($id);
            $account->update(['role' => config('role.user')]);

            return trans('text.admin.publisher_request.delete_success');
        } catch (ModelNotFoundException $e) {
            return trans('text.admin.publisher_request.delete_fail');
        }
    }
}
