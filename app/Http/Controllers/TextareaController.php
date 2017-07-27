<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Textarea;
use Auth;


class TextareaController extends Controller

{

   public function __construct()
    {
        //protect this controller with auth middleware
        $this->middleware('auth', ['except' => [
            'show'
        ]]);
    }


    /**

     * Display a listing of the resource

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $textareas = Auth::user()->textareas()->orderBy('id','DESC')->paginate(5);

        return view('textarea.index',compact('textareas'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('textarea.create');

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',
            'textarea' => 'required',

        ]);


        Textarea::create($request->all());

        return redirect()->route('textarea.index')

                        ->with('success','Textarea created successfully');

    }


    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $textarea = Textarea::find($id);

        return view('textarea.show',compact('textarea'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $textarea = Textarea::find($id);

        return view('textarea.edit',compact('textarea'));

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

        $this->validate($request, [

            'name' => 'required',
            'textarea' => 'required',

        ]);


        Textarea::find($id)->update($request->all());

        return redirect()->route('textarea.index')

                        ->with('success','Textarea updated successfully');

    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        Textarea::find($id)->delete();

        return redirect()->route('textarea.index')

                        ->with('success','Item deleted successfully');

    }

}