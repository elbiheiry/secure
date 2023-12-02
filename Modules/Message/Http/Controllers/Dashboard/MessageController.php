<?php

namespace Modules\Message\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Message\Emails\ReplyMessage;
use Modules\Message\Entities\Message;
use Modules\Message\Entities\Reply;
use Modules\Message\Http\Requests\ReplyRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function message()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('message::message.message', compact('messages'));
    }

    public function show($type, $id)
    {
        $message = Message::where('id', $id)->first();
        return view('message::message.show', compact('message'));
    }
}