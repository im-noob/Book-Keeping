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

                @forelse ($data as $item)
                    <tr>
                        <th scope="row">{{$item->transaction_id}}</th>
                        <th>{{$item->from_user}} paid Rs. {{$item->transaction_amount}}/- to {{$item->to_user}} on {{$item->transaction_date}} </th>
                    </tr>
                @empty
                    <tr>
                        <th>No Data Found</th>
                    </tr>
                @endforelse

            </tbody>

        </table>
    </section>

@endsection