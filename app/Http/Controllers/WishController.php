<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp;

class WishController extends Controller
{
    
    function __construct(){
        define('LINE_API_KEY','kZcto0j6AbahhTRSdjBxdXlfvtDfD+TW876ZdiRAL5fPsCgQmMrX8b/PYH7YFy+Y3cf3XlBXRh9HtJtXSAjoaW55aHj1PFy4JHf52nP1zXB4cwwZurOQtaQU03H5vCsqypo0J22Wsq8z1Bbevwn5kwdB04t89/1O/w1cDnyilFU=');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = [
            '0' => Wish::where('status',0)->get(),
            '1' => Wish::where('status',1)->get(),
            '2' => Wish::where('status',2)->get(),
            '3' => Wish::where('status',3)->get(),
        ];
        return view('wishes.index',compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asd = new Wish([
            'course_id' => $request->get('course_id'),
            'specialization_id' => $request->get('specialization_id'),
            'module_id' => $request->get('module_id'),
            'chapter_id' => $request->get('chapter_id'),
            'user_id' => $request->get('user_id'),
            'content' => $request->get('content'),
            'status' => 0,
        ]);
        $asd->save();

        return redirect()->route('request.store')->with('message', 'User '.$request->get('username').' created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function edit(Wish $wish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //dd($request);
        $message = '';
        $wish=Wish::find($id);

        switch($request->status){
            case 1:
                $message = "Hi ".$wish->user->full_name."!\n\nTerima kasih sudah request di LPencerdas.\n\nSekarang, request mu dengan id: ".$id." sudah dikonfirmasi dan akan diproses.\n\nMohon tunggu kabar selanjutnya ya.\n\nLPencerdas";
                break;
            case 2:
                $message = "Hi ".$wish->user->full_name."!\n\nSekarang, request mu dengan id: ".$id." sudah selesai diproses. Silahkan mengakses maeri baru di Website LPencerdas.\n\nLPencerdas";
                break;
        }
        
        $wish->status=$request->status;
        $wish->save();
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.line.me']);
        $response = $client->post('/v2/bot/message/push', [
            'headers' => [
                'Authorization' => 'Bearer '.LINE_API_KEY
            ],
            'json' => [
                'to' => User::find($wish->user_id)->uuid,
                //'to' =>  'U267c35cf0645c2d3f1870ee7dcc4b97e',
                'messages' => [[
                    'type' => 'text',
                    'text' => $message,
                    //'text' => 'hallo sayang'
                ]]
            ]
        ]);
        $response=json_decode($response->getBody()->getContents());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wish $wish)
    {
        //
    }

    public function countNew()
    {
        $c = count(Wish::where('status',0)->get());
        return response()->json($c,200);
    } 
}
