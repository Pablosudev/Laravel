<div>
<h1>Activities</h1>
        @foreach($activities as $activity)
            <ol>
                <p>Tipo: {{$activity->type}} <br>UserID: {{$activity->user_id}} <br/> Fecha: {{$activity->datetime}} <br/> Pagado: {{$activity->paid}} <br/> Notas: {{$activity->notes}} <br/> Satisfacción: {{$activity->satisfaction}}</p>
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta actividad?');">Eliminar</button>
                </form>
            </ol>
        @endforeach
       <a href="{{route('activities.create')}}">New Activity</a>
       
</div>
@include('partials.footer')

