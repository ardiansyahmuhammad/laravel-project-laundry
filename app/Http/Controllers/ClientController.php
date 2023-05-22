<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function view_status()
    {
        # code...
        return view('client.status');
    }

    public function view_dashboard()
    {
        return view('client.home');
    }

    public function view_history()
    {
        return view('client.history');
    }
    public function view_settings()
    {
        return view('client.settings');
    }

 

    public function getAllStatus()
    {
        $status = DB::table('orders')
            ->select(
                'id as id',
                'alamat as alamat',
                'totalBayar as totalBayar',
                'status'

            )
            ->orderBy('id', 'asc')
            ->get();
    }
}
