<?php

namespace App\Http\Controllers;

use App\Content;
use App\Proposal;
use App\ProposalTypeRole;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;
use RedBeanPHP\Util\Dump;

class AdminController extends Controller
{
    public function index()
    {
        $isSuperAdmin = Auth::user()->role_id == config('app.roles.superadmin')? true : false;

        (!$isSuperAdmin) && $proposal_type = ProposalTypeRole::where('role_id', auth()->user()->role_id)->first()->proposal_type;

        if (isset($proposal_type))
            $proposals = Proposal::where('proposal_type', '=', $proposal_type)->paginate(10);
        else
            $proposals = Proposal::paginate(10);

        $role = Role::where('id', auth()->user()->role_id)->first()->role;


        return view('admin.index', compact('proposals', 'isSuperAdmin', 'role'));
    }

    public function contentShow()
    {
        $content = Content::first();
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

        Content::first()->update($attributes);
        return back()->with('success', 'Сохранено');
    }
}
