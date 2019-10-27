<?php

namespace App\Http\Controllers;

use App\transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Translation\Loader\CsvFileLoader;

class transactions_c extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table(DB::raw('(
            SELECT
                *,
                users.user_name AS from_user
            FROM
                `transactions`
            JOIN users ON users.id = transactions.from_user_id
        ) AS table1'))->join('users','users.id','=','table1.to_user_id')
        ->select('transaction_id','transaction_amount','users.user_name AS to_user','from_user','transaction_date')
        ->get();
        return view('layouts.transactions',["data" => $data]);
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
        $storagePath =  storage_path();
        $this->validate($request,[
            'file'=> 'required',
        ]);
        
        $CSV_file = $request->file('file');
        // $file_name = $CSV_file->getClientOriginalName();
        $ext = strtolower($CSV_file->getClientOriginalExtension());

        //checking extesion matched or not
        if(strcmp("csv",$ext) == 0){
            // Storing File 
            $path = $CSV_file->storeAs('/','temp.csv');
            
            // //retrinving and reading... geting content 
            // $content = Storage::get($path);

            // //converting to csv array
            // $transArr = str_getcsv($content,",","","\n");

            // //extracting and pusshing in DB
            // foreach ($transArr as $key => $value) {
            //     // if ($key>3) {
            //         echo($key."--->".$value."\n");
            //     // }
            // }
            
            $handle = fopen($storagePath ."/app/". $path,'r');
            $arr = $this->csvToArr($handle);

            // pushing to array
            foreach ($arr as $key => $value) {
                if($key){
                    $transactions_var = new transactions();
                    $transactions_var->from_user_id = $value[0];
                    $transactions_var->to_user_id = $value[1];
                    $transactions_var->transaction_amount = $value[2];

                    // convertin date to time stamp
                    $timestamp = \Carbon\Carbon::createFromFormat('d-m-Y', $value[3])->toDateTimeString();
                    // var_dump($timestamp);
                    $transactions_var->transaction_date = $timestamp;
                    $transactions_var->save();
                }
            }
            
            return redirect()->route('transactions.index')->with('success','Successfully Uploaded');

        }else{
            echo "extesion mismatch";
            return redirect()->route('uploadCSV')->with('failed','Invalid File Extension');
        }

    }

    public function csvToArr($handle){
        $finalArr = [];
        while(($row = fgetcsv($handle,1000)) !== false){
            array_push($finalArr,$row);
        }
        return($finalArr);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function show(transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(transactions $transactions)
    {
        //
    }
}
