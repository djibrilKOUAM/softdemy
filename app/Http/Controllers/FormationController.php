<?php

namespace App\Http\Controllers;

use App\Models\Formations;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formations::all();

        return view('formation.index', compact('formations'));
    }

    public function create()
    {
        return view('formation.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'module'=>'required',
        ]);
        $data=$request->all();
        $status=Formations::create($data);
        if($status){
            Toastr::success("Formation ajouter avec success");
            return redirect()->route('formations.index');
        }else{
            Toastr::error("Erreur lors de l'ajout.Veuillez réessayer!!");
            return back();
        }
    }

    public function edit($id)
    {
        $formations = Formations::find($id);
        return view('formation.edit',compact('formations'));
    }

    public function update(Request $request, $id)
    {
        $formation = Formations::find($id);
        $this->validate($request, [
            'module'=>'required',
        ]);
        if ($formation){
            $data = $request->all();
            $status = $formation->fill($data)->save();
            if($status){
                Toastr::success("La formation a été modifiée avec success");
                return redirect()->route('formations.index');
            }else{
                Toastr::error("Erreur lors de la modification.Veuillez réessayer!!");
                return back();
            }
        }else{
            Toastr::error("Aucune donnée trouvée");
            return back();
        }
    }

    public function deleteformations($id)
    {
        $formation = Formations::find($id);
        if ($formation){
            $status = $formation->delete();
            if($status){
                Toastr::info("Suppression du formation Réussie");
                return redirect()->route('formations.index');
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
