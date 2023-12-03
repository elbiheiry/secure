<?php

namespace Modules\About\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\About\Entities\About;
use Modules\About\Http\Requests\Dashboard\AboutRequest;

class AboutController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     * 
     * @return Renderable
     */
    public function index()
    {
        $abouts = About::all();

        return view('about::index' , ['abouts' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('about::create');
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
        return view('about::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param About $about
     * @return Renderable
     */
    public function edit(About $about)
    {
        return view('about::edit' , ['about' => $about]);
    }

    /**
     * Update the specified resource in storage.
     * @param AboutRequest $request
     * @param About $about
     * @return Renderable
     */
    public function update(AboutRequest $request, About $about)
    {
        try {
            $data = [
                'icon' => $request->icon
            ];
            if ($request->has('image')) {
                $this->image_delete($about->image , 'about');
                $data['image'] = $this->image_manipulate($request->image , 'about' , 570 , 750);
            }

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            $about->update($data);

            $url = route('admin.about.index');

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
        //
    }
}
