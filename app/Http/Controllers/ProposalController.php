<?php

namespace App\Http\Controllers;

use App\EducationLevel;
use App\Mail\AdminFormSend;
use App\Mail\ClientFormSend;
use App\Proposal;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Mockery\Exception;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index1(){
        $educ_lvl = EducationLevel::getEductionLevels();
        return view('proposalA', compact('educ_lvl'));
    }

    public function index2(){
        $educ_lvl = EducationLevel::getEductionLevels();
        return view('proposalB', compact('educ_lvl'));
    }

    public function store(Request $request, Proposal $proposal){
        try{
            $attributes = $request->all();

            $file = $request->img ? $request->img : null;
            if ($file) {
                $request->validate([
                    'img' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
                ]);
                $extension = $file->getClientOriginalExtension();
                $filename = 'profile-photo-' . time() . '.' . $extension;
                $file->storeAs('public/images/upload', $filename);
                $attributes['img'] = $filename;
            }

            $attributes['ip'] = $request->ip();

            preg_match('/.+\?(.+)/',$request->utm, $matches);
            $attributes['utm'] = $matches ? $matches[1] : '';
            dump($attributes);


            Proposal::create($attributes);

            Mail::to(['email' => 'freeone1989@gmail.com'],['email' => 'nn.moshkin@ya.ru'])->queue(
                new ClientFormSend($attributes['name'])
            );

//            Mail::to($attributes['email'])->queue(     //асинхронный метод отправки почты
//                new AdminFormSend()
//            );

            return 1;
        }
        catch(Exception $e){
            return $e;
        }
    }

}
