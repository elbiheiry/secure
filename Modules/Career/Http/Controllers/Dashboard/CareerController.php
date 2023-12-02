<?php

namespace Modules\Career\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Career\Entities\Career;
use Modules\Career\Http\Requests\Dashboard\CareerRequest;

class CareerController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $careers = Career::select('id' , 'image' , 'slug')->orderByDesc('id')->get();

        return view('career::index', ['careers' => $careers]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('career::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CareerRequest $request
     * @return Renderable
     */
    public function store(CareerRequest $request)
    {
        try {
            $data = [
                'image' => $this->image_manipulate($request->image , 'careers' , 1000 , 665),
                'type' => $request->type,
                'vacation' => $request->vacation,
                'slug' => SlugService::createSlug(Career::class , 'slug' , $request->title_en , ['unique' => true])
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'location' => $request['location_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            Career::create($data);

            $url = route('admin.careers.index');

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
        return view('career::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Career $career
     * @return Renderable
     */
    public function edit(Career $career)
    {
        return view('career::edit' , ['career' => $career]);
    }

    /**
     * Update the specified resource in storage.
     * @param CareerRequest $request
     * @param Career $career
     * @return Renderable
     */
    public function update(CareerRequest $request, Career $career)
    {
        try {
            $data = [
                // 'image' => $this->image_manipulate($request->image , 'careers' , 1000 , 665),
                'type' => $request->type,
                'vacation' => $request->vacation,
                'slug' => $request->title_en != $career->translate('en')->title ? SlugService::createSlug(Career::class , 'slug' , $request->title_en , ['unique' => true]) : $career->slug
            ];

            if ($request->image) {
                $this->image_delete($career->image , 'careers');
                $data['image'] = $this->image_manipulate($request->image , 'careers' , 1000 , 665);
            }

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'location' => $request['location_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            $career->update($data);

            $url = route('admin.careers.index');

            return update_response($url);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Career $career
     * @return Renderable
     */
    public function destroy(Career $career)
    {
        $this->image_delete($career->image , 'careers');

        $career->delete();

        return redirect()->back();
    }
}
