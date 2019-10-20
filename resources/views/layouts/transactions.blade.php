@extends('layouts.app')
@section('transactions')
    {{-- <section>
        <button class="bt btn-secondry btn-block btn-lg mt-4" >Create User</button>
    </section> --}}

    
    <section>
        <table class="table table-hover table-triped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Transaction Details</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <th>Amit paid Rs. 300/- to Rajesh on 15/10/2019</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th>Amit paid Rs. 300/- to Rajesh on 15/10/2019</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th>Amit paid Rs. 300/- to Rajesh on 15/10/2019</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th>Amit paid Rs. 300/- to Rajesh on 15/10/2019</th>
                </tr>


            </tbody>

        </table>
    </section>

@endsection