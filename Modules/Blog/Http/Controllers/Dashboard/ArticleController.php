<?php

namespace Modules\Blog\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\articles\Slugarticle;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Article;
use Modules\Blog\Http\Requests\Dashboard\ArticleRequest;

class ArticleController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $articles = Article::select('id' , 'image' , 'slug')->orderByDesc('id')->get();

        return view('blog::index' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('blog::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ArticleRequest $request
     * @return Renderable
     */
    public function store(ArticleRequest $request)
    {
        try {
            $data = [
                'image' => $this->image_manipulate($request->image , 'articles' , 1200 , 800),
                'type' => $request->type,
                'slug' => SlugService::createSlug(Article::class , 'slug' , $request->title_en , ['unique' => true])
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'department' => $request['department_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            Article::create($data);

            $url = route('admin.articles.index');

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
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Article $article
     * @return Renderable
     */
    public function edit(Article $article)
    {
        return view('blog::edit' , compact('article'));
    }

        /**
     * Update the specified resource in storage.
     * @param ArticleRequest $request
     * @param Article $article
     * @return Renderable
     */
    public function update(ArticleRequest $request, Article $article)
    {
        try {
            $data = [];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'department' => $request['department_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            if ($request->image) {
                $this->image_delete($article->image , 'articles');
                $data['image'] = $this->image_manipulate($request->image , 'articles' , 1200 , 800);
            }


            if ($request->title_en != $article->translate('en')->title) {
                $data['slug'] = SlugService::createSlug(Article::class , 'slug' , $request->title_en , ['unique' => true]);
            }

            $article->update($data);

            $url = route('admin.articles.edit' , ['article' => $article->slug]);

            return update_response($url);
        } catch (\Throwable $e) {
            return error_response();
        }
    }


    /**
     * Remove the specified resource from storage.
     * @param Article $article
     * @return Renderable
     */
    public function destroy(Article $article)
    {
        $this->image_delete($article->image , 'articles');

        $article->delete();

        return redirect()->back();
    }
}
