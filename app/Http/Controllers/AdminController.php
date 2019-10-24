<?php

namespace App\Http\Controllers;

use App\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RedBeanPHP\Util\Dump;

class AdminController extends Controller
{
    public function index()
    {

        $isSuperAdmin = Auth::user()->role_id == 4 ? true : false;

        (!$isSuperAdmin) && $proposal_type = DB::table('proposal_roles')->where('role_id', auth()->user()->role_id)->first()->proposal_type;

        if (isset($proposal_type))
            $proposals = Proposal::where('proposal_type', '=', $proposal_type)->paginate(10);
        else
            $proposals = Proposal::paginate(10);

        $role = DB::table('roles')->where('id', auth()->user()->role_id)->first()->role;


        return view('admin.index', compact('proposals', 'isSuperAdmin', 'role'));
    }

    public function contentShow()
    {
        $content = DB::table('content')->first();
        return view('admin.content', compact('content'));
    }

    public function contentUpdate(Request $request)
    {

        $attributes = $request->validate([
            'text' => 'required|min:10',
            'img_1' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            'img_2' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            'img_3' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $file = isset($request->img_1) ? $request->img_1 : null;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = 'profile-photo-' . time() . '.' . $extension;
            $file->storeAs('public/images/main', $filename);
            $attributes['img_1'] = $filename;
        }
        $file = isset($request->img_2) ? $request->img_2 : null;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = 'profile-photo-' . time() . '.' . $extension;
            $file->storeAs('public/images/main', $filename);
            $attributes['img_2'] = $filename;
        }
        $file = isset($request->img_3) ? $request->img_3 : null;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = 'profile-photo-' . time() . '.' . $extension;
            $file->storeAs('public/images/main', $filename);
            $attributes['img_3'] = $filename;
        }

        DB::table('content')->update($attributes);
        return back()->with('success', 'Сохранено');
    }
}
