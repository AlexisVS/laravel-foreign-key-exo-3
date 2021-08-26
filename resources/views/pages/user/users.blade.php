@extends("template.index")
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Nickname</th>
                <th scope="col">profil_id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->nickname }}</td>
                    <td>{{ $user->profil_id }}</td>
                    <td>{{ $user->profil->name }}</td>
                    <td>{{ $user->profil->age }}</td>
                    <td>{{ $user->profil->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
