<?php

namespace Modules\Slideshow\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Slideshow\Entities\Slideshow;
use Modules\Slideshow\Http\Requests\Dashboard\SlideshowRequest;

class SlideshowController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $slides = Slideshow::all()->sortByDesc('id');

        return view('slideshow::index' , ['slides' => $slides]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('slideshow::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param SlideshowRequest $request
     * @return Renderable
     */
    public function store(SlideshowRequest $request)
    {
        try {
            $data = [
                'image' => $this->image_manipulate($request->image , 'slideshow' , 1785 , 1005)
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'subtitle' => $request['subtitle_' . $locale]
                ];
            }

            Slideshow::create($data);

            $url = route('admin.slides.index');

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
        return view('slideshow::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Slideshow $slide
     * @return Renderable
     */
    public function edit(Slideshow $slide)
    {
        return view('slideshow::edit' , ['slide' => $slide]);
    }

    /**
     * Update the specified resource in storage.
     * @param SlideshowRequest $request
     * @param Slideshow $slide
     * @return Renderable
     */
    public function update(SlideshowRequest $request, Slideshow $slide)
    {
        try {
            $data = [
            ];

            if ($request->has('image')) {
                $this->image_delete($slide->image , 'slideshow');
                $data['image'] = $this->image_manipulate($request->image , 'slideshow' , 1785 , 1005);
            }

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'title' => $request['title_' . $locale],
                    'subtitle' => $request['subtitle_' . $locale]
                ];
            }

            $slide->update($data);

            $url = route('admin.slides.index');

            return update_response($url);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Slideshow $slide
     * @return Renderable
     */
    public function destroy(Slideshow $slide)
    {
        $this->image_delete($slide->image , 'slideshow');

        $slide->delete();

        return redirect()->back();
    }
}
