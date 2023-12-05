<?php

namespace Modules\Forum\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Forum\Entities\Forum;
use Modules\Forum\Entities\ForumComment;

class ForumCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Forum $forum)
    {
        $comments = ForumComment::where([
            ['forum_id' , $forum->id],
            ['forum_comment_id' , null]
        ])->orderByDesc('id')->paginate(20);

        return view('forum::comments' , ['comments' => $comments]);
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
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $comments = ForumComment::where('forum_comment_id' , $id)->orderByDesc('id')->paginate(20);

        return view('forum::comment' , ['comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('forum::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        ForumComment::find($id)->delete();

        return redirect()->back();
    }
}
