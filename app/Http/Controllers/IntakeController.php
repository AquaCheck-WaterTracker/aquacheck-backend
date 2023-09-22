<?php

namespace App\Http\Controllers;
use App\Models\Intake;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    public function show(Request $request){
       
        $userId = $request->query('userId');
        $intake = Intake::where('id_user', '=', $userId)->get();
        
        if (!empty($intake))
        {
            return $intake;
        }
        else
        {
            return response()->json([
                "message"=> "Intake not found"
            ], 404);
        }
    }

    //CREATE
    

    public function store(Request $request){
        $intake = new Intake;

        $payload = $request->json()->all();

        $intake->id_user = $payload['id_user'];
        $intake->intake = $payload['intake'];

        $intake->save();

        return response()->json($intake, 201);
    }


// UPDATE
public function update(Request $request, $id){

    $payload = $request->json()->all();
    
    $intake = Intake::find($id);

    if (!empty($intake))
    {
        $intake->intake = $payload['intake'];

        $intake->update();

        return response()->json([
            "message" => "Intake updated"
        ], 201);

    } else {

        return response()->json([
            "message"=> "Intake not update succesfully"
        ], 404);
    }
}
}
