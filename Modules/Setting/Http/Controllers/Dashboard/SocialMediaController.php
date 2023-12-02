<?php

namespace Modules\Setting\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\SocialMedia;
use Modules\Setting\Http\Requests\Dashboard\SocialMediaRequest;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $links = SocialMedia::all()->sortByDesc('id');

        return view('setting::social.index' ,['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('setting::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param SocialMediaRequest $request
     * @return Renderable
     */
    public function store(SocialMediaRequest $request)
    {
        try {
            SocialMedia::create($request->all());

            $url = route('admin.links.index');

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
        return view('setting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $link = SocialMedia::find($id);

        return view('setting::social.edit' , ['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     * @param SocialMediaRequest $request
     * @param int $id
     * @return Renderable
     */
    public function update(SocialMediaRequest $request, $id)
    {
        try {
            $link = SocialMedia::find($id);

            $link->update($request->all());

            $url = route('admin.links.index');

            return update_response($url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        try {
            SocialMedia::find($id)->delete();

            return redirect()->back();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
