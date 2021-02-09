<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_orders = Order::select("*")->GetExpectedShipDate()->get();
        foreach ($all_orders as $key => $val) {
            $date_index = strpos ( $val->comments , 'Date:');
            $date_substr = substr($val->comments, $date_index + 5);

            $formatted_date = date( 'Y-m-d H:i:s', strtotime( $date_substr ) );
            
            Order::where('orderid', '=', $val->orderid)->update(['shipdate_expected' => $formatted_date], ['touch' => false]);
        }

        $orders_categories = Order::select( 'comments', 'orderid', 'shipdate_expected',
                                    DB::raw('
                                    CASE 
                                        WHEN comments LIKE "%candy%" or comments LIKE "%smarties%" or comments LIKE "%laffy%" or comments LIKE "%taffy%" THEN "candy"
                                        WHEN comments LIKE "%call me%" THEN "call_me"
                                        WHEN comments LIKE "%referr%" THEN "referred"
                                        WHEN comments LIKE "%signature%" THEN "signature"
                                        ELSE "miscellaneous"
                                    END AS category'))->get();

        return view('orders.index', compact('orders_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


}



