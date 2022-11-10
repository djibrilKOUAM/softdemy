<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{

    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::all();
        // $data['news_total'] = news::all()->sum('montant');

        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titre'=>'required',
            'description'=>'required',
            'date'=>'required',
            'image'=>'required',
        ]);
        $data=$request->all();
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('image/'.$data['image']));
            $fileName=date('dmYHis').$file->getClientOriginalName();
            $file->move(public_path('image'),$fileName);
            $data['image']=$fileName;
        }
        $status=News::create($data);
        if($status){
            Toastr::info("Ajout de la nouvelle Réussie");
            return redirect()->route('news.index');
        }else{
            Toastr::error("Erreur lors de l'ajout.Veuillez réessayer!!");
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $this->validate($request, [
            'titre'=>'required',
            'description'=>'required',
            'date'=>'required',
        ]);
        if ($news){
            $data = $request->all();
            if($request->file('image')){
                $file=$request->file('image');
                @unlink(public_path('image/'.$data['image']));
                $fileName=$file->getClientOriginalName();
                $newfileName=date('dmYHis').$fileName;
                $file->move(public_path('image'),$newfileName);
                $data['image']=$newfileName;
            }
            // dd( $data['image']);
            $status = $news->fill($data)->save();
            if($status){
                Toastr::info("Modification du news Réussie");
                return redirect()->route('news.index');
            }else{
                Toastr::error("Erreur lors de la modification.Veuillez réessayer!!");
                return back();
            }
        }else{
            Toastr::error("Aucune donnée trouvée");
            return back();
        }
    }

    public function deleteImage($id){
        $news= News::find($id);
        if (File::exists(public_path('image/'.$news->image))) {
            File::delete(public_path('image/'.$news->image));
            $news->image=NULL;
            $news->update();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteNews($id)
    {

        $news = News::find($id);
        if ($news){
            $status = $news->delete();
            if($status){
                Toastr::info("Suppression du news Réussie");
                return redirect()->route('news.index');
            }else{
                Toastr::error("Erreur lors de la suppression.Veuillez réessayer!!");
                return back();
            }
        }else{
            Toastr::error("Data not found");
            return back();
        }
    }
}
