<?php

namespace Modules\Client\Http\Controllers\Dashboard;

use App\Traits\ImageTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Client\Entities\Client;
use Modules\Client\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $clients = Client::all()->sortByDesc('id');

        return view('client::index' , compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('client::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ClientRequest $request
     * @return Renderable
     */
    public function store(ClientRequest $request)
    {
        try {
            Client::create([
                'image' => $this->image_manipulate($request->image , 'clients' , 400 , 200),
                'link' => $request->link
            ]);

            $url = route('admin.clients.index');

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
        return view('client::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Client $client
     * @return Renderable
     */
    public function edit(Client $client)
    {
        return view('client::edit' , compact('client'));
    }

    /**
     * Update the specified resource in storage.
     * @param ClientRequest $request
     * @param Client $client
     * @return Renderable
     */
    public function update(ClientRequest $request, Client $client)
    {
        try {
            $data = [
                'link' => $request->link
            ];

            if ($request->has('image')) {
                $this->image_delete($client->image , 'clients');
                $data['image'] = $this->image_manipulate($request->image , 'clients' , 400 , 200);
            }
            
            $client->update($data);

            $url = route('admin.clients.index');

            return update_response($url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Client $client
     * @return Renderable
     */
    public function destroy(Client $client)
    {
        $this->image_delete($client->image , 'clients');

        $client->delete();

        return redirect()->back();
    }
}
