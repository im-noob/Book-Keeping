@extends('layouts.app')
@section('userList')

    
    <section>
      <button class="bt btn-secondry btn-block btn-lg mt-4" data-toggle="modal" data-target="#create_button_modal">Create User</button>
    </section>

    {{-- Create Button Modal Section:START --}}
    <div class="modal fade" id="create_button_modal" tabindex="-1" role="dialog" aria-labelledby="Update_Button_Modal_Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Update_Button_Modal_Label">Create User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form method="POST" action="{{ url('userList') }}">
              @csrf
              @method('POST')
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" >
                          Create User
                      </button>
                  </div>
              </div>
            </form>

          </div>
        </div>
      </div>
  </div>
  {{-- Create Button Modal Section:STOP --}}

    <section>
        <table class="table table-hover table-triped">
            <thead>
                <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

              @forelse ($data as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <th>{{$item->user_name}}</th>
                    <th>{{$item->email}} </th>
                    <th>
                      <button type="button"  class="btn btn-primary update_btn update_button" data-toggle="modal" data-target="#Update_Button_Modal_{{$item->id}}">Update</button>
                          {{-- Create Button Modal Section:START --}}
                          <div class="modal fade" id="Update_Button_Modal_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="Update_Button_Modal_Label" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="Update_Button_Modal_Label">Update User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    
                                    <form method="POST" action="{{ url('userList') }}/{{$item->id}} ">
                                      @csrf
                                      @method('PUT')
                                      <div class="form-group row">
                                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        
                                          <div class="col-md-6">
                                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                                              @error('name')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
                        
                                      <div class="form-group row">
                                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        
                                          <div class="col-md-6">
                                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
                        
                                      <div class="form-group row">
                                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        
                                          <div class="col-md-6">
                                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                                              @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
                        
                                      <div class="form-group row">
                                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        
                                          <div class="col-md-6">
                                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                          </div>
                                      </div>
                        
                                      <div class="form-group row mb-0">
                                          <div class="col-md-6 offset-md-4">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary" >
                                                  Update User
                                              </button>
                                          </div>
                                      </div>
                                    </form>
                                    
                                  </div>
                                </div>
                              </div>
                          </div>
                          {{-- Create Button Modal Section:STOP --}}
                    </th>
                    <th>
                        <form method="POST" action="{{url('/userList')}}/{{$item->id}}"> 
                          @method("DELETE")
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </th>
                    
                </tr>
              @empty
                  <tr>
                    <th>No Data Found</th>
                  </tr>
              @endforelse
                
                


            </tbody>

        </table>
    </section>





    {{-- Script:START --}}
    <script>
    
        $(function(){
            console.log("Script Loaded");

            $(".update_btn").click(function(){
                console.log("Update Button Pressed");
                // $('#myModal').on('shown.bs.modal', function () {
                //   $('#myInput').trigger('focus')
                // })
            });
        });
    </script>
    {{-- Script:STOP--}}
@endsection