@extends('contacts.layout')
@section('content')
<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('contact') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Address</label></br>
            @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile</label></br>
            @if ($errors->has('mobile'))
            <span class="text-danger">{{ $errors->first('mobile') }}</span>
            @endif
            <input type="text" name="mobile" id="mobile" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop