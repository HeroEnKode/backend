<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Resources\Profile as ProfileResource;

class ProfilesController extends Controller
{

    public function index()
    {
        $profiles = Profile::paginate(15);
        return ProfileResource::collection($profiles);
    }

    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->name = $request->input('name');
        $profile->description = $request->input('description');
    
        if( $profile->save() ){
          return new ProfileResource( $profile );
        }   
    }

    public function show($id)
    {
        $profile = Profile::findOrFail( $id );
        return new ProfileResource( $profile );
    }

    public function update(Request $request)
    {

        $profile = Profile::findOrFail( $request->id );

        $profile->name = $request->input('name');
        $profile->description = $request->input('description');

        if( $profile->save() ){
          return new ProfileResource( $profile );
        }
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail( $id );

        if( $profile->delete() ){
          return new ProfileResource( $profile );
        }
    }
}
