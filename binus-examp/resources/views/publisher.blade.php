@extends('app')

@section('content')
    
    <table cell-padding="0" >
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($publishers as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <a href="/publisher/detail/{{ $item->id }}" class="detail-publisher">
                            Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection