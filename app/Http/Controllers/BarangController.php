<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel;

class BarangController extends Controller
{
    public function Template1()
    {
    	return view('test');
    }
    public function Template2()
    {
    	return view('test2');
    }
    public function Template3()
    {
    	return view('test3');
    }
    public function Template4()
    {
    	return view('test4');
    }

    public function Template5(){
   		//menampilkan semua data melalu model
   		$barang = BarangModel::all();
   		return view('test5',compact('barang'));
   	}
}
