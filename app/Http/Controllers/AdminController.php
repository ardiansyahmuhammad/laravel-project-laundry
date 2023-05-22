<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    public function update_order(Request $request, Orders $order)
    {
        $request->validate([
            'statusPesanan' => ['required', 'gt:0']
        ]);
        $order->update([
            'statusPesanan' => $request->statusPesanan
        ]);
        return view('');
    }

    public function getAllUser()
    {
        $user = DB::table('users')
            ->select(
                'id as id',
                'username as username',
                'email as email',
                'usertype as usertype'
            )
            ->get();

        return DataTables::of($user)
            ->addColumn('action', function ($user) {
                $btn = '<a type="button" href="' . url('userView') . "/" . $user->id . '" style="padding: 3px 20px" class="btn btn-primary">Edit</a>';
                return $btn;
            })
            ->make(true);


    }

    public function createUser()
    {
        return view('admin.user-control');
    }

    public function showUser(User $user)
    {
        return view('admin.userupdate', compact('user'));
    }

    public function delete_order($id)
    {
        $order = DB::table('Orders')->where('id', $id)->delete();
        return redirect('createUser');
    }

    public function update_user(Request $request, User $user)
    {
        $request->validate([
            'usertype' => ['required'],
            'username' => ['required']
        ]);

        $user->update([
            'username' => $request->username,
            'usertype' => $request->usertype
        ]);
        return redirect()->route('createUser');
    }


    public function delete_user($id)
    {
        $user = DB::table('user')->where('id', $id)->delete();
        return redirect('');
    }

    public function create_location()
    {
        return view('admin.location');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'daerah' => ['required', 'string']
            ],
            [
                'daerah.required' => "Form harus diisi"
            ]
        );

        $region = Region::create([
            'nama' => $request->daerah
        ]);

        // $region = new Region;
        // $region->nama = $request->daerah;
        // $region->save();

        return redirect()->route('location');
    }

    public function getAllDaerah()
    {
        $daerah = DB::table('regions')
            ->select(
                'id as id',
                'nama as nama'
            )
            ->get();

        return DataTables::of($daerah)
            ->addColumn('action', function ($daerah) {
                $btn = '<a type="button" href="' . url('deleteDaerah') . "/" . $daerah->id . '" style="padding: 3px 20px" class="btn btn-primary">Hapus</a>';
                return $btn;
            })
            ->make(true);
    }
    public function deleteDaerah($id)
    {
        $region = DB::table('regions')->where('id', $id)->delete();
        return redirect('location');
    }
}