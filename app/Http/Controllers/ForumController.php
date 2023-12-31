<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Forum\Entities\Forum;
use Modules\Forum\Entities\ForumComment;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $forums = Forum::whereTranslationLike('title' , '%'.$request->search.'%')->orderByDesc('id')->paginate(10);
        }else{
            $forums = Forum::orderByDesc('id')->paginate(10);
        }

        return view('site.pages.forums' , ['forums' => $forums]);
    }

    public function forum(Forum $forum)
    {
        $relates = Forum::withCount('comments')->where('id' , '!=' , $forum->id)->orderBy('comments_count' , 'desc')->take(4)->get();

        return view('site.pages.forum' , ['forum' => $forum , 'relates' => $relates]);
    }

    public function createForum(Request $request)
    {
        $validation = Validator::make($request->all() , [
            'title' => ['required' , 'string' , 'max:255'],
            'category' => ['string' , 'required' , 'max:255'],
            'description' => ['required']
        ] ,[] ,[
            'title' => locale() == 'en' ? 'Title' : 'العنوان',
            'category' => locale() == 'en' ? 'Category' : 'القسم',
            'description' => locale() == 'en' ? 'Description' : 'الوصف',
        ]);

        if ($validation->fails()) {
            return failed_validation($validation->errors()->first());
        }

        try {
            $data = [
                'slug' => SlugService::createSlug(Forum::class , 'slug' , $request->title , ['unique' => true]),
                'member_id' => member()->id(),
                'category' => $request->category
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request->title,
                    'description' => '<p>'.$request->description.'</p>',
                ];
            }

            Forum::create($data);

            $url = route('site.forums');

            return success_response(
                locale() == 'en' ? 'Your forum has been added' : 'تم إضافة البيانات',
                $url);
        } catch (\Throwable $e) {
            return error_response();
        }
    }

    public function addComment(Request $request)
    {
        $validation = Validator::make($request->all() , [
            'name' => ['required_if:forum_comment_id,null' , 'string' , 'max:255'],
            'email' => ['required_if:forum_comment_id,null' , 'email' , 'max:255'],
            'comment' => ['required'],
        ] ,[] ,[
            'name' => locale() == 'en' ? 'Name' : 'الإسم بالكامل',
            'email' => locale() == 'en' ? 'Email' : 'البريد الإلكتروني',
            'comment' => locale() == 'en' ? 'Comment' : 'التعليق'
        ]);

        if ($validation->fails()) {
            return failed_validation($validation->errors()->first());
        }

        try {
            $forum = Forum::find($request->forum_id);
            $member = member()->user();

            if ($request->has('forum_comment_id')) {
                $comment = ForumComment::find($request->forum_comment_id);

                ForumComment::create([
                    'forum_id' => $comment->forum_id,
                    'name' => $member->name,
                    'email' => $member->email,
                    'comment' => $request->comment,
                    'forum_comment_id' => $request->forum_comment_id
                ]);
            }else{
                ForumComment::create([
                    'forum_id' => $request->forum_id,
                    'name' => $member->name,
                    'email' => $member->email,
                    'comment' => $request->comment
                ]);
            }
            
            $url = route('site.forum' ,['forum' => $forum->slug]);

            return success_response(
                locale() == 'en' ? 'Your comment has been added' : 'تم إضافة تعليقك',
                $url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
