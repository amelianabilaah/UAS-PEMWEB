<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();

        return view('', compact('user'));
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
            $input = $request->all();
    
            $request->validate([
                'email' => ['required'],
                'name' => ['required'],
                'phone_number' => ['required'],
                'password' => ['required']
            ]);
    
            $input['level'] = "customer";
            $input['password'] = Hash::make($input['password']);
            $input['remember_token'] = Str::random(60);
    
            User::create($input);
    
            return redirect()->route('login');
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
    public function editAdmin()
    {
        $user = Auth::user();

        return view('adminprofile', compact('user'));
    }

    public function editUser()
    {
        $user = Auth::user();

        return view('userprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAdmin()
    {
        $user = Auth::user();

        return view('updateadmin', compact('user'));
        
    }


    public function updateUser()
    {
        $user = Auth::user();

        return view('updateuser', compact('user'));
        
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

    //new
    public function resubmitdataadmin(Request $request, $id)
    {
        $user=Auth::user();
        $user->update($request->all());
        $input = $request->all();

        $request->validate([
            'name' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
           
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $path = $image->storeAs('uploads', $imageName, 'public');
            $user->image = '/storage/'.$path;
        }

            $user->name = $input['name'];
            $user->phone_number = $input['phone_number'];
            $user->address = $input['address'];
            $user->email = $input['email'];
           

            $user->save();


        return redirect()->route('admin.profile')->with('success','Data Update Successfully');
    }


    public function resubmitdatauser(Request $request, $id)
    {
        $user=Auth::user();
        $user->update($request->all());
        $input = $request->all();

        $request->validate([
            'name' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
           
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $path = $image->storeAs('uploads', $imageName, 'public');
            $user->image = '/storage/'.$path;
        }

            $user->name = $input['name'];
            $user->phone_number = $input['phone_number'];
            $user->address = $input['address'];
            $user->email = $input['email'];
           

            $user->save();


        return redirect()->route('userprofile')->with('success','Data Update Successfully');
    }

    
}


