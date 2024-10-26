<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() #fungsi untuk menampilkan halaman default
    {
        return view('order.index');
    }

    public function store(Request $request)#fungsi untuk menambah data order
    {
        $request->validate([
            'name' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'kuantitas' => 'required|integer|min:1',
            'catatan' => 'required',
            'tipe_baju' => 'required'
        ]);

        $order = Order::create($request->all());

        return view('order.order_confirm', compact('order'));
    }


        public function status(Request $request) #fungsi untuk cek status
        {
            $request->validate([
                'order_code' => 'required|string',
            ]);
            $order_code = $request->input('order_code');
    
            $order = Order::where('order_code', $order_code)->first();
    
            if ($order) {
                return view('order.status', ['order' => $order]);
            } else {
                return view('order.status_false');
            }
        }
    
    
}
