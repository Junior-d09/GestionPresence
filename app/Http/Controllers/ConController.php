<?php
    namespace App\Http\Controllers;

    use App\Models\Presence;
    use App\Models\Etudiant;
    use App\Models\Formateur;
    use Illuminate\Http\Request;
    use Carbon\Carbon;

    class ConController extends Controller
    {
        public function etudiant($numMat)
        {
            $numM = "eg2PZckpgl";
            $num = "138522314";
            if($numMat == $num){
                $etudiant = Etudiant::where('num_matri', $numM)->first();
                if($etudiant){
                $num_matri = $etudiant->num_matri;
                $name = $etudiant->name;
                $profession = "Etudiant";
                $id_etu = $etudiant->id;
                $serveDate = Carbon::now();
                $date = $serveDate->format('Y-m-d');
                $heure = $serveDate->format('H:i');
                $presence = Presence::create([
                    'num_matri' => $numM,
                    'name' => $name,
                    'profession' => $profession,
                    'etudiant_id' => $id_etu,
                    'date' => $date,
                    'heure' => $heure,
                    'formateur_id' => $id_etu,
                ]);
                return response()->make("OK", 200);
            }else{
                return response()->make('Etudiant non existant 1');
            }
            }else{
                return response()->make('Etudiant non existant 2');
            }
        }

        public function formateur($numMat)
        {
            $numM = "dq7Tifn1kx";
            $num = "23217016713";
            if($numMat == $num){
                $formateur = Formateur::where('num_matri', $numM)->first();
            if($formateur){
                $num_matri = $formateur->num_matri;
                $name = $formateur->name;
                $profession = "Formateur";
                $id_form = $formateur->id;
                $serveDate = Carbon::now();
                $date = $serveDate->format('Y-m-d');
                $heure = $serveDate->format('H:i');
                $presence = Presence::create([
                    'num_matri' => $numM,
                    'name' => $name,
                    'profession' => $profession,
                    'etudiant_id' => $id_form,
                    'date' => $date,
                    'heure' => $heure,
                    'formateur_id' => $id_form,
                ]);
                return response()->make("OK", 200);
            }else{
                return response()->make('Formateur non existant 1');
            }
            }else{
                return response()->make('Formateur non existant 2');
            }
        }
    }
