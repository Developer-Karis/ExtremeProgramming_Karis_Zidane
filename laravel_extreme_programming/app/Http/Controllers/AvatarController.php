<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pages.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $avatars = Avatar::all();
        return view('pages.avatars', compact('users', 'avatars'));
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
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar, $id)
    {
        $show = User::find($id);
        return view('pages.showUser', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar, $id)
    {
        $edit = User::find($id);
        return view('pages.editUser', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar, $id)
    {
        $request->validate([
            'newName' => ['max:20'],
            'newAge' => ['min:20', 'max:65'],
            'newEmail' => ['max:30'],
            'newNameAvatar' => ['max:15'],
        ]);

        $update = User::find($id);
        $update->name = $request->newName;
        $update->age = $request->newAge;
        $update->email = $request->newEmail;
        $update->password = $request->newPassword;
        $update->save();

        $updateAvatar = Avatar::find($id);
        $updateAvatar->nom = $request->newNameAvatar;
        $updateAvatar->src = $request->file('newPhoto')->hashName();
        $updateAvatar->save();
        $request->file('newPhoto')->storePublicly('imagesAvatar', 'public');
        return redirect('show-user/' . $update->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar, $id)
    {
        $newDelete = Avatar::find($id);
        $newDelete->delete();
        return redirect('/avatars');
    }

    public function destroyUser(User $user, $id)
    {
        $newDelete = User::find($id);
        $newDelete->delete();
        return redirect('/users');
    }

    public function createAvatar(Request $request)
    {
        return view('pages.createAvatar');
    }

    public function addAvatar(Request $request)
    {
        $addAvatar = new Avatar();
        $addAvatar->nom = $request->addNameAvatar;
        $addAvatar->src = $request->file('addAvatar')->hashName();
        $request->file('addAvatar')->storePublicly('imagesAvatar', 'public');
        $addAvatar->save();
        return redirect()->back();
    }
}
