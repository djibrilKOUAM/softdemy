<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Bilan;
use App\Models\Formations;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $bilans=Bilan::all();
        $data['bilan_total'] = Bilan::all()->sum('montant');
        $news=News::all();
        $formations = Formations::all();
        return view('home',$data,compact('bilans','news','formations'));
    }

    public function formations()
    {
        $formations = Formations::all();
        return view('formation',compact('formations'));
    }

    public function news()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('news',compact('news'));
    }

    public function welcome()
    {
        $news = News::orderBy('created_at', 'DESC')->get()->take(2);
        return view('welcome',compact('news'));
    }

}
