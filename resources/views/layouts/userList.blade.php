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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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

                <tr>
                    <th scope="row">1</th>
                    <th>aaravonly4you</th>
                    <th>aaravonly4you@gmail.com</th>
                    <th><button type="button" class="btn btn-primary update_btn" data-toggle="modal" data-target="#Update_Button_Modal_1">Update</button></th>
                    <th><button type="button" class="btn btn-danger">Delete</button></th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th>aaravonly4you</th>
                    <th>aaravonly4you@gmail.com</th>
                    <th><button type="button" class="btn btn-primary update_btn" data-toggle="modal" data-target="#Update_Button_Modal_1">Update</button></th>
                    <th><button type="button" class="btn btn-danger">Delete</button></th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th>aaravonly4you</th>
                    <th>aaravonly4you@gmail.com</th>
                    <th><button type="button" class="btn btn-primary update_btn" data-toggle="modal" data-target="#Update_Button_Modal_1">Update</button></th>
                    <th><button type="button" class="btn btn-danger">Delete</button></th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th>aaravonly4you</th>
                    <th>aaravonly4you@gmail.com</th>
                    <th><button type="button" class="btn btn-primary update_btn" data-toggle="modal" data-target="#Update_Button_Modal_1">Update</button></th>
                    <th><button type="button" class="btn btn-danger">Delete</button></th>
                </tr>


            </tbody>

        </table>
    </section>


    {{-- Modal Section:START --}}
    <div class="modal fade" id="Update_Button_Modal_1" tabindex="-1" role="dialog" aria-labelledby="Update_Button_Modal_Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Update_Button_Modal_Label">Update User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
    {{-- Modal Section:STOP --}}

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