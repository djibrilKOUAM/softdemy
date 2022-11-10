<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Bilan;
use App\Models\Formations;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BilanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bilans=Bilan::all();
        $data['bilan_total'] = Bilan::all()->sum('montant');
        $news=News::all();
        $formations = Formations::all();
        return view('bilan.index',$data,compact('bilans','news','formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bilan.create');
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
            'designation'=>'required',
            'montant'=>'required|min:3',
        ]);
        $data=$request->all();
        $status=Bilan::create($data);
        if($status){
            Toastr::info("Bilan ajouter avec success");
            return redirect()->route('bilans.index');
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
        $bilans = Bilan::find($id);
        return view('bilan.edit',compact('bilans'));
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
        $bilan = Bilan::find($id);
        $this->validate($request, [
            'designation'=>'required',
            'montant'=>'required|min:3',
        ]);
        if ($bilan){
            $data = $request->all();
            $status = $bilan->fill($data)->save();
            if($status){
                Toastr::info("Modification du bilan Réussie");
                return redirect()->route('bilans.index');
            }else{
                Toastr::error("Erreur lors de la modification.Veuillez réessayer!!");
                return back();
            }
        }else{
            Toastr::error("Aucune donnée trouvée");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteBilan($id)
    {
        $Bilan = Bilan::find($id);
        if ($Bilan){
            $status = $Bilan->delete();
            if($status){
                Toastr::info("Suppression du bilan Réussie");
                return redirect()->route('bilans.index');
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
