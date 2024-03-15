<?php

namespace App\Http\Controllers;
use App\Models\Tower;
use App\Models\Card;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Fetch all tower names from the towers table
        $allTowers = Tower::pluck('TowerName', 'TowerId')->toArray();
    
        // Fetch data from the database for all towers
        $towerData = Card::groupBy('towernumber')
                         ->selectRaw('towernumber, COUNT(*) as card_count')
                         ->pluck('card_count', 'towernumber')
                         ->toArray();
    
        // Initialize an array to hold the card counts for all towers
        $cardCounts = [];
        $towerLabels = [];
    
        // Loop through all tower numbers and add the card count and tower name to the arrays
        foreach ($allTowers as $towerId => $towerName) {
            $cardCounts[] = $towerData[$towerId] ?? 0;
            $towerLabels[] = $towerName;
        }
    
        // Pass data to the view
        return view('Dashboard1', compact('towerLabels', 'cardCounts'));
    }
    
}
