<div>
<h1>Users</h1>
        @foreach($users as $user)
            <ol>
                <p>Name: {{$user->name}} <br>Email: {{$user->email}} </p>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este ususario?');">Eliminar</button>
                </form>
            </ol>
        @endforeach
       <a href="{{route('users.create')}}">New User</a>

</div>
