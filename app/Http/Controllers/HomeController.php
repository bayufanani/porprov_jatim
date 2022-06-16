<?php

namespace App\Http\Controllers;

use App\Beritum;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medali = collect([
            [
                'nama' => 'Situbondo',
                'emas' => 3,
                'perak' => 7,
                'perunggu' => 8,
                'total' => 18
            ],
            [
                'nama' => 'Jember',
                'emas' => 2,
                'perak' => 7,
                'perunggu' => 6,
                'total' => 15
            ],
            [
                'nama' => 'Lumajang',
                'emas' => 1,
                'perak' => 3,
                'perunggu' => 9,
                'total' => 13
            ]
        ]);

        $data = [
            'berita' => Beritum::orderBy('created_at', 'DESC')->take(8)->get(),
            'highlight' => Beritum::where('is_highlight', 1)->orderBy('created_at', 'DESC')->take(4)->get(),
            'medali' => $medali
        ];

        return view('home', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
