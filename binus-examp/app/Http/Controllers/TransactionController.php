<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function save(Request $request){
        Transaction::create([
            'name' => $request->nama,
            'id_user' => Auth::user()->id,
            'id_book' => $request->id_book,
            'alamat' => $request->alamat,
            'phone' => $request->phone
        ]);

        return redirect()->back()->with('success', 'Transaksi berhasil di simpan');
    }
}
