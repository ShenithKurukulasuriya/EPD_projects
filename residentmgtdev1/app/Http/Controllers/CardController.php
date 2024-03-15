<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // Retrieve the latest card entries and paginate them
                $cards = Card::latest()->get();

                // Return the Vehicale_card_details view with the paginated cards
                // and an index offset for pagination
                return view('Vehicale_card_details', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data according to your table's requirements
        $validatedData = $request->validate([
            'cardnumber' => 'required|unique:cardsn,cardnumber', // Replace 'field1' with your actual table column name
            'vnumber' => 'required', // Replace 'field2' with another column name, and so on
            'housenumber'=>'required',
            'towernumber'=>'required',
            'floornumber'=>'required',
            // Add other validation rules as per your table's schema
        ]);
    
        // Create a new card entry using the Card model
        Card::create($request->all());
    
        // Redirect back to the Vehicale_card_details view with a success message
        session()->flash('card_created', true);
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return response()->json($card);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'cardnumber' => 'required',
            'vnumber' => 'required',
            'housenumber' => 'required',
            'towernumber'=>'required',
            'floornumber'=>'required',
        ]);
    
        $card->update($request->only(['cardnumber', 'vnumber', 'housenumber','towernumber','floornumber']));
    
        session()->flash('card_updated', true);
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
                // Perform the delete operation
                $card->delete();

            // Redirect back or to a specific route
            

            // After deletion
            session()->flash('card_deleted', true);
            return redirect()->back();  
    }
}
