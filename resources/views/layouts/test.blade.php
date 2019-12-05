@extends('layouts.app')
@section('userList')

    
 {{-- START:Delete Button --}}
                    <th>
                        <form method="POST" action="{{url('/userList')}}/1/edit"> 
                          @method('GET')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </th>
                    {{-- STOP:Delete Button --}}

@endsection