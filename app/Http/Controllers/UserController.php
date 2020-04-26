<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = User::all();
        return view('show',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validation = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'dob' => 'required',
            'streetAddress' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'bio' => 'required',
            'interest' => 'required',
            'dollar' => 'required',
            'degree' => 'required',
            'resume' => 'required',
        ]);
        
        $user = new User;

        $path = $request->file('resume')->store('resumes');

        $interest = json_encode($request->interest);

        if($path){

            $user->name                     = $request->firstname . ' ' . $request->lastname;
            $user->email                    = $request->email;
            $user->phone                    = $request->phone;
            $user->website                  = $request->website;
            $user->dob                      = $request->dob;
            $user->streetAddress            = $request->streetAddress;
            $user->streetAddressSecond      = $request->streetAddressSecond;
            $user->city                     = $request->city;
            $user->state                    = $request->state;
            $user->country                  = $request->country;
            $user->sex                      = $request->gender;
            $user->bio                      = $request->bio;
            $user->interestedDivision       = $interest;
            $user->salaryAmount             = $request->dollar . '.' . $request->cent;
            $user->degree                   = $request->degree;
            $user->experience               = $request->experience;
            $user->designation              = $request->designation;
            $user->cvFileName               = $path;

            $save                           = $user->save();

            if($save){
                return redirect()->back()->with('success', 'User  has been added successfully!');
            }else{
                return redirect()->back()->withErrors('User add failed!')->withInput();
            }
        }else{
            return redirect()->back()->withErrors($path)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        if($request->file('resume')){

            Storage::delete($user->cvFileName);
            $path = $request->file('resume')->store('resumes');

            $validation = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'website' => 'required',
                'dob' => 'required',
                'streetAddress' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'gender' => 'required',
                'bio' => 'required',
                'interest' => 'required',
                'dollar' => 'required',
                'degree' => 'required',
                'resume' => 'required',
            ]);

            $interest = json_encode($request->interest);

            if($path){
                $user->name                     = $request->firstname . ' ' . $request->lastname;
                $user->email                    = $request->email;
                $user->phone                    = $request->phone;
                $user->website                  = $request->website;
                $user->dob                      = $request->dob;
                $user->streetAddress            = $request->streetAddress;
                $user->streetAddressSecond      = $request->streetAddressSecond;
                $user->city                     = $request->city;
                $user->state                    = $request->state;
                $user->country                  = $request->country;
                $user->sex                      = $request->gender;
                $user->bio                      = $request->bio;
                $user->interestedDivision       = $interest;
                $user->salaryAmount             = $request->dollar . '.' . $request->cent;
                $user->degree                   = $request->degree;
                $user->experience               = $request->experience;
                $user->designation              = $request->designation;
                $user->cvFileName               = $path;

                $save                           = $user->save();

                if($save){
                    return redirect()->back()->with('success', 'User data has been updated successfully!');
                }else{
                    return redirect()->back()->withErrors('User updated failed!')->withInput();
                }
            }else{
                return redirect()->back()->withErrors($path)->withInput();
            }

        }else{
            
            $validation = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'website' => 'required',
                'dob' => 'required',
                'streetAddress' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'gender' => 'required',
                'bio' => 'required',
                'interest' => 'required',
                'dollar' => 'required',
                'degree' => 'required',
            ]);
            
            $interest = json_encode($request->interest);

            $user->name                     = $request->firstname . ' ' . $request->lastname;
            $user->email                    = $request->email;
            $user->phone                    = $request->phone;
            $user->website                  = $request->website;
            $user->dob                      = $request->dob;
            $user->streetAddress            = $request->streetAddress;
            $user->streetAddressSecond      = $request->streetAddressSecond;
            $user->city                     = $request->city;
            $user->state                    = $request->state;
            $user->country                  = $request->country;
            $user->sex                      = $request->gender;
            $user->bio                      = $request->bio;
            $user->interestedDivision       = $interest;
            $user->salaryAmount             = $request->dollar . '.' . $request->cent;
            $user->degree                   = $request->degree;
            $user->experience               = $request->experience;
            $user->designation              = $request->designation;

            $save                           = $user->save();

            if($save){
                return redirect()->back()->with('success', 'User has been updated successfully!');
            }else{
                return redirect()->back()->withErrors('User update failed!')->withInput();
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {   
        Storage::delete($user->cvFileName);
        $delete = $user->delete();
        if($delete){
            return back()->with('success','User Deleted successfully');
        }
    }
}
