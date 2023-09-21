<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Goal;
class GoalController extends Controller
{
    
 // CREAR

    public function show(Request $request){
        // Recojo el parametro ?userId de la peticion HTTP GET del navegador / postman
        $userId = $request->query('userId');
       
        $goal = Goal::where('id_user', '=', $userId)->first();

        if (!empty($goal))
        {
            return $goal;
        }
        else
        {
            return response()->json([
                "message"=> "Goal not found"
            ], 404);
        }
    }

    // CREATE
    public function store(Request $request){
        $goal = new Goal;

        $payload = $request->json()->all();

        $goal->id_user = $payload['id_user'];
        $goal->goal = $payload['goal'];

        $goal->save();

        return response()->json($goal, 201);
    }

    //EDIT    
        public function update(Request $request, $id){

        $payload = $request->json()->all();
        
        $goal = Goal::find($id);
    
        
        if (!empty($goal))
        {
            $goal->goal = $payload['goal'];

            $goal->update();

            return response()->json($goal, 201);

        } else {

            return response()->json([
                "message"=> "Goal not found"
            ], 404);
        }
    }

    //DELETE

    public function destroy(Request $request, $id){        
        $userId = $request->query('userId');
       
        $goal = Goal::where('id',  $id)
            ->where('id_user', '=', $userId);

        if (!empty($goal))
        {

            $goal->delete();

            return response()->json([
                "message" => "Goal deleted"
            ], 201);

        } else {

            return response()->json([
                "message"=> "Goal not found"
            ], 404);
        }
    }
    
}
