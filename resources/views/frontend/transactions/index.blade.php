@extends('layout.master')

@section('content')
    <a href="/transactions/create"><button type="button" class="btn btn-default">Import</button></a>
    <table id="my-table" class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Account</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Category</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php $hideWords = ['internal transfer']; ?>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->account }}</td>
                <td>{{ number_format($transaction->amount, 2, '.', ',') }}</td>
                <td>{!!  wordwrap($transaction->description, 60, "<br/>") !!}</td>
                <td>{{ $transaction->category->name }}</td>
                <td>{{ $transaction->date }}</td>
            </tr>
        @endforeach
        </tbody>
        <script>
            jQuery('#my-table').DataTable();
        </script>
    </table>
@endsection