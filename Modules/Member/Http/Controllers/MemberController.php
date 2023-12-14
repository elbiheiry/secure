<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Member\Entities\Member;
use Modules\Member\Http\Requests\MemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $members = Member::all()->sortByDesc('id');

        return view('member::index' , [
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('member::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param MemberRequest $request
     * @return Renderable
     */
    public function store(MemberRequest $request)
    {
        try {
            Member::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $url = route('admin.members.index');

            return add_response($url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('member::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Member $member
     * @return Renderable
     */
    public function edit(Member $member)
    {
        return view('member::edit' , ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     * @param MemberRequest $request
     * @param Member $member
     * @return Renderable
     */
    public function update(MemberRequest $request, Member $member)
    {
        try {
            $data = $request->validated();

            if ($request->has('password')) {
                $data['password'] = Hash::make($request->password);
            }

            $member->update($data);

            $url = route('admin.members.index');

            return add_response($url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Member $member
     * @return Renderable
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->back();
    }
}
