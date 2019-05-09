<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
class TransaksiController extends Controller
{
    public function index()
    {
    	$transaksi=Transaksi::where('status','0')->get();
    	return view('transaksi.index',compact('transaksi'));
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'qty'=>'required'
    	]);
    	Transaksi::create($request->except('submit'));
    	return redirect()->route('transaksi.index');
    }
}
