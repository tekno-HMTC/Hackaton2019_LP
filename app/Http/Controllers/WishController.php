<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;
use GuzzleHttp;

class WishController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        define('LINE_API_KEY','kZcto0j6AbahhTRSdjBxdXlfvtDfD+TW876ZdiRAL5fPsCgQmMrX8b/PYH7YFy+Y3cf3XlBXRh9HtJtXSAjoaW55aHj1PFy4JHf52nP1zXB4cwwZurOQtaQU03H5vCsqypo0J22Wsq8z1Bbevwn5kwdB04t89/1O/w1cDnyilFU=');
        $message = '';
        switch($request->status){
            case 1:
                $message = 'sedang diproses';
                break;
            case 2:
                $message = 'sudah selesai';
                break;
            case 3:
                $message = 'ditolak';
                break;
        }
        $wish=Wish::find($id);
        $wish->status=$request->status;
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
                    'text' => 'Request anda pada mata kuliah '.$request->mata_kuliah.' '.$message,
                    //'text' => 'hallo sayang'
                ]]
            ]
        ]);
        $response=json_decode($response->getBody()->getContents());
        return $response;
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
}
