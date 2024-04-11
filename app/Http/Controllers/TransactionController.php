<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //
    public function show($id){
        $transact = Message::find($id);

        return view('transact', compact('transact'));
    }

    public function store(Request $request, $id){
        $validated=$request->validate([
            'total_amount_due'=>['required'],
            'total_amount_received'=>['required']
        ]);

        $change = doubleval($validated['total_amount_received']) - doubleval($validated['total_amount_due']);

        Transaction::create([
            'message_id' => $id,
            'total_amount_received' => $validated['total_amount_received'],
            'total_amount_due' => $validated['total_amount_due'],
            'change' => $change
        ]);

        $message = Message::where('message_id', $id);
        $message->update([
            'is_completed' => 1
        ]);

        return redirect('/viewmsg')->with('message_success', 'Transaction saved.');
    }
}
