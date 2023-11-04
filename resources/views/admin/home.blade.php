@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Family Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Self Query</th>
                                <th>Enquiry</th>
                                <th>Billing Address</th>
                                <th>Billing City</th>
                                <th>Billing State</th>
                                <th>Post Code</th>
                                <th>Billing Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->given_name}}</td>
                                    <td>{{$item->family_name}}</td>
                                    <td>{{$item->email_address}}</td>
                                    <td>{{ get_country($item->country_id) }}</td>
                                    <td>{{($item->is_your_enquiry == 1) ? "Yes":"No"}}</td>
                                    <td>{{$item->enquiry}}</td>
                                    <td>{{$item->billing_address_1}}</td>
                                    <td>{{$item->billing_suburb}}</td>
                                    <td>{{ get_state($item->billing_state) }}</td>
                                    <td>{{$item->billing_postcode}}</td>
                                    <td>{{ get_country($item->billing_country_id) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
