<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $transactions = \App\Transaction::all();
        return view('frontend.transactions.index')->with(compact('transactions'));
    }

    public function create() {
        return view('frontend.transactions.import');
    }

    public function store(Request $request) {
        if ($request->hasFile('transactions')) {
            $file = $request->file('transactions');
            $handle = fopen($file->path(), "r");
            while ($csvLine = fgetcsv($handle, 1000, ",")) {
                \App\Transaction::create([
                    'amount' => floatval($csvLine[0]),
                    'user_id' => 1,
                    'category_id' => random_int(1, 3),
                    'description' => $csvLine[1],
                    'date' => $csvLine[2],
                    'type' => 'Test'
                ]);
            }
        }
        return redirect('/transactions');
    }
}
