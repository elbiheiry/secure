<?php

namespace Modules\Forum\Http\Controllers\Dashboard;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Forum\Entities\Forum;
use Modules\Forum\Http\Requests\Dashboard\ForumRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $forums = Forum::select('id' , 'slug')->orderByDesc('id')->get();

        return view('forum::index' , compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('forum::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ForumRequest $request
     * @return Renderable
     */
    public function store(ForumRequest $request)
    {
        try {
            $data = [
                'slug' => SlugService::createSlug(Forum::class , 'slug' , $request->title_en , ['unique' => true])
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'description' => $request['description_' . $locale],
                    'category' => $request['category_'.$locale]
                ];
            }

            Forum::create($data);

            $url = route('admin.forums.index');

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
        return view('forum::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param forum $forum
     * @return Renderable
     */
    public function edit(Forum $forum)
    {
        return view('forum::edit' , compact('forum'));
    }

        /**
     * Update the specified resource in storage.
     * @param ForumRequest $request
     * @param Forum $forum
     * @return Renderable
     */
    public function update(ForumRequest $request, Forum $forum)
    {
        try {
            $data = [];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'description' => $request['description_' . $locale],
                    'category' => $request['category_'.$locale]
                ];
            }
            if ($request->title_en != $forum->translate('en')->title) {
                $data['slug'] = SlugService::createSlug(Forum::class , 'slug' , $request->title_en , ['unique' => true]);
            }

            $forum->update($data);

            $url = route('admin.forums.edit' , ['forum' => $forum->slug]);

            return update_response($url);
        } catch (\Throwable $e) {
            return error_response();
        }
    }


    /**
     * Remove the specified resource from storage.
     * @param Forum $forum
     * @return Renderable
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->back();
    }
}
