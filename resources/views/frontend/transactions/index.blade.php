@extends('layout.master')

@section('content')
    <a href="/transactions/create"><button type="button" class="btn btn-default">Import</button></a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->name }}</td>
                <td>{{ $transaction->type }}</td>
                <td>{{ $transaction->description }}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection