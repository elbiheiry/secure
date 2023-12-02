<?php

namespace Modules\Branch\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Branch\Entities\Branch;
use Modules\Branch\Http\Requests\BranchRequest;

class BranchController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $branches = Branch::all()->sortByDesc('id');

        return view('branch::index' , compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('branch::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param BranchRequest $request
     * @return Renderable
     */
    public function store(BranchRequest $request)
    {
        try {
            $data = [];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'address' => $request['address_' . $locale],
                ];
            }

            $data['image'] = $this->image_manipulate($request->image , 'branches' , 150 , 150);

            Branch::create($data);

            $url = route('admin.branches.index');

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
        return view('branch::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Branch $branch
     * @return Renderable
     */
    public function edit(Branch $branch)
    {
        return view('branch::edit' , ['branch' => $branch]);
    }

    /**
     * Update the specified resource in storage.
     * @param BranchRequest $request
     * @param Branch $branch
     * @return Renderable
     */
    public function update(BranchRequest $request, Branch $branch)
    {
        try {
            $data = [];

            foreach (config('translatable.locales') as $locale) {
                $data[$locale] = [
                    'address' => $request['address_' . $locale],
                ];
            }

            if ($request->image) {
                $this->image_delete($branch->image , 'branches');
                $data['image'] = $this->image_manipulate($request->image , 'branches' , 150 , 150);
            }

            $branch->update($data);

            $url = route('admin.branches.index');

            return update_response($url);
        } catch (\Throwable $e) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Branch $branch
     * @return Renderable
     */
    public function destroy(Branch $branch)
    {
        $this->image_delete($branch->image , 'branches');

        $branch->delete();

        return redirect()->back();
    }
}
