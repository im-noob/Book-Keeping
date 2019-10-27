@extends('layouts.app')
@section('uploadCSV')
    <section>
            <div class="card mt-4">
                <div class="card-body">

                    <h5 class="card-title">Upload CSV</h5>
                    <h6 class="card-subtitle mb-4 text-muted">(from_user_id, to_user_id, transaction_amount, transaction_date)</h6>

                    <form method="POST" action="{{url('transactions')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file" type=".csv" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Upload File</button>
                            </div>
                        </div>
                    </form>
                    
                </div> 
            </div>
    </section>
@endsection