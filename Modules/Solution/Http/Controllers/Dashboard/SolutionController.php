<?php

namespace Modules\Solution\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Solution\Entities\Solution;
use Modules\Solution\Http\Requests\SolutionRequest;

class SolutionController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $solutions = Solution::select('id' , 'image' , 'slug')->orderByDesc('id')->get();

        return view('solution::index' , compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('solution::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(SolutionRequest $request)
    {
        try {
            $data = [
                'icon' => $request->icon,
                'image' => $this->image_manipulate($request->image , 'solutions' , 1000 , 560),
                'slug' => SlugService::createSlug(Solution::class , 'slug' , $request->name_en , ['unique' => true])
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'name' => $request['name_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            Solution::create($data);

            $url = route('admin.solutions.index');

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
        return view('solution::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param solution $solution
     * @return Renderable
     */
    public function edit(Solution $solution)
    {
        return view('solution::edit' , compact('solution'));
    }

        /**
     * Update the specified resource in storage.
     * @param SolutionRequest $request
     * @param Solution $solution
     * @return Renderable
     */
    public function update(SolutionRequest $request, Solution $solution)
    {
        try {
            $data = [
                'icon' => $request->icon
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'name' => $request['name_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            if ($request->image) {
                $this->image_delete($solution->image , 'solutions');
                $data['image'] = $this->image_manipulate($request->image , 'solutions' , 1000 , 560);
            }


            if ($request->name_en != $solution->translate('en')->name) {
                $data['slug'] = SlugService::createSlug(Solution::class , 'slug' , $request->name_en , ['unique' => true]);
            }

            $solution->update($data);

            $url = route('admin.solutions.edit' , ['solution' => $solution->slug]);

            return update_response($url);
        } catch (\Throwable $e) {
            return error_response();
        }
    }


    /**
     * Remove the specified resource from storage.
     * @param Solution $solution
     * @return Renderable
     */
    public function destroy(Solution $solution)
    {
        $this->image_delete($solution->image , 'solutions');

        $solution->delete();

        return redirect()->back();
    }
}
