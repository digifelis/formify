<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageList;
use App\Models\FormData;
use Illuminate\Support\Facades\Mail;
class MessageController extends Controller
{
    //
public function show($id)
{
    $messageList = MessageList::where('form_id', $id)
                                ->where('user_id', auth()->user()->id)
                                ->get();
    return view('message.show', ['messages' => $messageList]);
}

public function submission(Request $request, $id)
{
    $messageData = '';
    foreach ($request->all() as $key => $value) {
        if ($key != '_token') {
            $messageData .= $key . ': ' . $value . "\n";
        }
    }
    $formdata = FormData::where('idhash', $id)->first();
    /*
    if ($formdata->save_data == 1){
        $messageList = new MessageList();
        $messageList->form_id = $formdata->id;
        $messageList->user_id = $formdata->user_id;
        $messageList->message_data = $messageData;
        $messageList->save();


        Mail::raw($messageData, function ($message) use ($formdata) {
            $message->to($formdata->email)
                    ->subject('New Message from ' . $formdata->display_name);
        });

    } else {

        Mail::raw($messageData, function ($message) use ($formdata) {
            $message->to($formdata->email)
                    ->subject('New Message from ' . $formdata->display_name);
        });
    }
    */
    $messageList = new MessageList();
    $messageList->form_id = $formdata->id;
    $messageList->user_id = $formdata->user_id;
    $messageList->message_data = $messageData;
    $messageList->save();
    
    /* return json data */
    return response()->json([
        'status' => 'success',
        'message' => 'Message has been submitted successfully!'
    ]);
}
}
