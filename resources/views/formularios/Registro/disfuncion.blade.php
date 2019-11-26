{{-- {!! Form::model($discapacidad, ['route'=>['save-d',$discapacidad], 'method'=>"POST", 'class'=> 'form-group']) !!} --}}
<form method="POST" action="{{route('save-d')}}" class="form-group">
    @csrf
    <div class="container-fluid border border-black row">
    @foreach ($discapacidad as $item)
        <div class="col"><input type="checkbox" name="{{$item->disc_cod}}" id="">{{$item->disc_des}}
        </div>
    @endforeach
    <br>
    </div>
{!! Form::submit('Actualizar', ['class'=> 'btn btn-primary']) !!}
</form>
{{-- {!! Form::close() !!} --}}