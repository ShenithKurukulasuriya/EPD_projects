<?php

namespace App\Http\Controllers;
use App\Models\House;
use App\Models\Tower;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        // Retrieve the latest house entries and paginate them
        //$houses = House::latest()->get();
        $houses = House::select('house.*', 'tower.TowerName')
            ->join('Tower', 'house.TowerNo', '=', 'tower.TowerId')
            ->get();

        // Return the housedate view with the paginated houses
        // and an index offset for pagination
        return view('housedata', compact('houses'));
    }

    
    public function store(Request $request)
    {
        // Validate the request data according to your table's requirements
        $validatedData = $request->validate([
            
            'HouseNo' => 'required',
            'IsAvailbe' => 'required',
            'Housetype' => 'required',
            'TowerNo' => 'required',
            'FloorNo' => 'required',
            'status'=>'required',
            // Add other validation rules as per your table's schema
        ]);

        // Create a new house entry using the House model
        House::create($request->all());

        // Redirect back to the housedate view with a success message
        session()->flash('house_created', true);
        return redirect()->back();
    }

    public function getActiveHouses(Request $request)
    {
        $towerNumber = $request->input('TowerNo');
        $floorNumber = $request->input('FloorNo');

        $tower = Tower::where('TowerId', $towerNumber)->first();

        // Check if the tower exists
        if (!$tower) {
            return response()->json(['error' => 'Tower not found'], 404);
        }

        // Check if the provided floor number is within the tower's floor count
        

        $activeHouses = House::where([
            ['TowerNo', '=', $towerNumber],
            ['FloorNo', '=', $floorNumber],
            ['status', '=', 'active'],
        ])->get();

        //return response()->json($activeHouses);
        return response()->json(['listhouses' => $activeHouses]);
    }

    public function showHouses($towerId,$floor)
    {
        // Use 'FloorNo' as the column name in your 'house' table
        //$houses = House::where('FloorNo', $floor)->get();

        $houses = House::where('TowerNo', $towerId)
                   ->where('FloorNo', $floor)
                   ->get();

        return view('floors', compact('houses'));
    }
   /* public function getactivehousecount(Request $request){
        $towerNumber = $request->input('TowerNo');
        $floorNumber = $request->input('FloorNo');

        $tower = Tower::where('TowerId', $towerNumber)->first();

        // Check if the tower exists
        if (!$tower) {
            return response()->json(['error' => 'Tower not found'], 404);
        }

        // Check if the provided floor number is within the tower's floor count
        

        $activeHouses = House::where([
            ['TowerNo', '=', $towerNumber],
            ['FloorNo', '=', $floorNumber],
            ['status', '=', 'active'],
        ])->get();
    }
*/
}

