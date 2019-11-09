<?php

namespace App\Http\Controllers;

use App\Note;
use App\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $note = Note::find($id);
      if ($note) {
        $article->delete();
      }
      return redirect()->route('home');
    }
}
