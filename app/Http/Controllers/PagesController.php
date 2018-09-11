<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use Jenssegers\Agent\Agent;
use Mail;
use Session;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new Agent();
        //$foo = new Foo();

        if ( $agent->isMobile() ) {
            return view('mobile.mwelcome');
        } else {
            return view('welcome');
        }
        
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
    public function postContact(Request $request){
        
        $this->validate($request, ['email' => 'required|email',
                                   'name' => 'min:10',
                                   'company' => 'min:5']);
        
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'company' => $request->company,
            'budget' => $request->budget,
            'project' => $request->project
        );

        Mail::send('email.contact',$data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('alvarezmicoh@gmail.com');
            $message->subject('Project Interest');
            });

        Session::flash('sucess','Your Email was sent');
        return redirect('/');

    }
}
