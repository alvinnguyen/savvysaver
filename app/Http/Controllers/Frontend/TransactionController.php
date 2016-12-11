<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $transactions = \App\Transaction::where('description', 'not like', '%internal%')->get();
        return view('frontend.transactions.index')->with(compact('transactions'));
    }

    public function create() {
        return view('frontend.transactions.import');
    }

    public function store(Request $request) {

        // TODO: Mapping here
        $keyByValue = [
            'date' => 0,
            'account' => 1,
            'description' => 2,
            'credit' => 3,
            'debit' => 4,
        ];
        $dateFormat = 'd/m/Y';

        $header = true;
        if ($request->hasFile('transactions')) {
            $file = $request->file('transactions');
            $handle = fopen($file->path(), "r");
            while ($csvLine = fgetcsv($handle, 1000, ",")) {
                if ($header) {
                    $header = false;
                    continue;
                }
                \App\Transaction::create([
                    'amount' => floatval($csvLine[3]) + floatval($csvLine[4]),
                    'account' => $csvLine[1],
                    'user_id' => 1,
                    'category_id' => random_int(1, 3),
                    'description' => $csvLine[2],
                    'date' => \Carbon\Carbon::createFromFormat($dateFormat ,$csvLine[0]),
                    'type' => 'Test'
                ]);
            }
        }
        return redirect('/transactions');
    }
}
