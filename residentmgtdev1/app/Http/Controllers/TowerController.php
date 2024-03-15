<?php

namespace App\Http\Controllers;
use App\Models\Tower;

use Illuminate\Http\Request;

class TowerController extends Controller
{
    //hello
   // public function showTower1($towerNumber)
    //{
        // Your logic for tower1
       // return view('towers',['myparameter1' => $towerNumber]);
    //}

    public function showTower1(Request $request, $towerId)
    {
        // Fetch the tower from the database based on the tower ID
        $tower = Tower::where('TowerId', $towerId)->first();

        // If the tower is found, pass the FloorsCount to the view
        $floorsCount = $tower ? $tower->FloorsCount : 0;

        return view('towers', [
            'tower' => $tower,
            'floorsCount' => $floorsCount,
            'towerid'=>$towerId
        ]);
        
    }
    public function getalltowers()
    {
        //$towers = Tower::pluck('TowerName', 'TowerId')->toArray(); // Assuming 'name' and 'id' are columns in the towers table
        //echo 'some text';
        $towers = Tower::pluck('TowerName', 'TowerId');
       // print_r($towers);
        //return view('housedata', compact('towers'));
        //return view('housedata', ['tower11' => $towers]);
        return response()->json(['listtowers' => $towers]);
        //return response()->json(['sucess' => 'true']);
    }

    public function getFloorsByTower(Request $request)
{
    $towerId = $request->input('tower_id');
        $tower = Tower::find($towerId);
        
        $floorCount = ($tower) ? $tower->FloorsCount : 0;

        return response()->json(['floorCount' => $floorCount]);
}

public function getHousesByTowerFloor(){}

}
