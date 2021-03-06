@extends('layouts.masterlayout')
@section('content')


    <div class="row">

        <div class="col-md-8 col-md-offset-1">
            <h3 class="text-center">Now <span class="text-danger">{{$moveOnCurrent->first_name}} {{$moveOnCurrent->last_name}}</span> move on Current member?</h3>
            <hr>
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error')}}
                </div>
            @endif
            <form method="post" action="{{url('/moveOnCurrent/'.$moveOnCurrent->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="std">Status</label>
                    <select id="std" name="status" class="form-control">
                        <option value="Current">Current</option>
                    </select>
                </div>
                <div class="btn btn-group border">
                    <button type="submit" class="btn btn-success btn-lg">Update Info</button>
                    <a href="{{url('/dashboard')}}" class="btn btn-success btn-lg">Cancel</a>
                </div>

            </form>
        </div>



    </div>







@endsection