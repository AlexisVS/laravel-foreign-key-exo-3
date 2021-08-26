@extends("template.index")
@section('content')
    <form class="d-flex flex-column align-items-center" action="/user" method="POST">
        @csrf
        <input class="my-2" type="text" name="name" placeholder="Name" id="">
        <input class="my-2" type="text" name="age" placeholder="Age" id="">
        <input class="my-2" type="text" name="phone" placeholder="Phone" id="">
        <input class="my-2" type="text" name="email" placeholder="Email" id="">
        <input class="my-2" type="text" name="nickname" placeholder="Nickname" id="">
        <input class="my-2" type="submit" value="Save" class="btn btn-primary text-white">
    </form>
@endsection
