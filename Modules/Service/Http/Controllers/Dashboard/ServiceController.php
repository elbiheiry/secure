<?php

namespace Modules\Service\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Service\Entities\Service;
use Modules\Service\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $services = Service::select('id' , 'image' , 'slug' , 'icon')->orderByDesc('id')->get();

        return view('service::index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('service::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ServiceRequest $request)
    {
        try {
            $data = [
                'image' => $this->image_manipulate($request->image , 'services' , 770 , 365),
                'outer_image' => $this->image_manipulate($request->outer_image , 'services' , 450 , 675),
                'icon' => $request->icon,
                'slug' => SlugService::createSlug(Service::class , 'slug' , $request->name_en , ['unique' => true])
            ];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'name' => $request['name_' . $locale],
                    'description' => $request['description_' . $locale],
                ];
            }

            Service::create($data);

            $url = route('admin.services.index');

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
        return view('service::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Service $service
     * @return Renderable
     */
    public function edit(Service $service)
    {
        return view('service::edit' , compact('service'));
    }

        /**
     * Update the specified resource in storage.
     * @param ServiceRequest $request
     * @param Service $service
     * @return Renderable
     */
    public function update(ServiceRequest $request, Service $service)
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
                $this->image_delete($service->image , 'services');
                $data['image'] = $this->image_manipulate($request->image , 'services' , 770 , 365);
            }

            if ($request->outer_image) {
                $this->image_delete($service->outer_image , 'services');
                $data['outer_image'] = $this->image_manipulate($request->outer_image , 'services' , 450 , 675);
            }

            if ($request->name_en != $service->translate('en')->name) {
                $data['slug'] = SlugService::createSlug(Service::class , 'slug' , $request->name_en , ['unique' => true]);
            }

            $service->update($data);

            $url = route('admin.services.edit' , ['service' => $service->slug]);

            return update_response($url);
        } catch (\Throwable $e) {
            return error_response();
        }
    }


    /**
     * Remove the specified resource from storage.
     * @param service $service
     * @return Renderable
     */
    public function destroy(Service $service)
    {
        $this->image_delete($service->image , 'services');

        $service->delete();

        return redirect()->back();
    }
}
