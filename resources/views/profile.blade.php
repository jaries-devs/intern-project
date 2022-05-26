@extends('layouts.app')

@section('content')
{!! Form::open(['method' => 'PATCH','route' => ['profile.update', $user->id],'style'=>'display:inline']) !!}
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
        
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="first name" value="<?= $user->first_name ?>">
                        </div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="last_name" class="form-control" placeholder="surname" value="<?= $user->last_name ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?= $user->address ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="enter address line 1" value="<?= $user->email ?>"></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input name="mobile_number" type="text" class="form-control" placeholder="enter address line 2" value="<?= $user->mobile_number ?>"></div>
                    </div>
                    
            
                    <div class="mt-5 text-center">{!! Form::submit('Save Profile', ['class' => 'btn btn-primary profile-button']) !!}</div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection


