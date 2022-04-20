<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $currentarray = [
            'from_currency' => $data['from_currency'],
            'to_currency' => $data['to_currency'],
            'from_price' => $data['from_price'],
            'to_price' => $data['to_price'],
        ];
        History::create($currentarray);
        return redirect()->route('home');

    }

}
