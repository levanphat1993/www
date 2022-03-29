
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
// helper

<form action="{{ route('user_store') }}" method="post">
    @csrf
    <label for="user_name">user name:</label><br>
    <input type="text" id="user_name" name="user_name" value=""><br>
    <label for="email">email:</label><br>
    <input type="text" id="email" name="email" value=""><br><br>
    <input type="submit" value="Submit">
</form>
