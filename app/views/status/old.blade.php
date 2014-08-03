@extends('layout.default')

@section('content')




{{Form::open(['route'=> 'status.store'])}}


<P>Project Name:
@foreach ($status as $stat)

 {{$stat->project_name}}</P>

@endforeach







<p></P>


	{{ Form::label('project_id', 'Project Name') }} 
	{{ Form::select('project_id',$projects)}}
		{{$errors->first ('project_id')}}




<p></P>
	{{ Form::label('scenarios_total', 'Scenarios total') }} 
	{{ Form::text('scenarios_total', Input::old('scenarios_total')) }}
		{{$errors->first ('scenarios_total')}}

<p></P>
	{{ Form::label('scenarios_comp', 'Scenarios comp') }} 
	{{ Form::text('scenarios_comp', Input::old('scenarios_comp')) }}
		{{$errors->first ('scenarios_comp')}}

<p></P>
	{{ Form::label('scenarios_pending', 'Scenarios pending') }} 
	{{ Form::text('scenarios_pending', Input::old('scenarios_pending')) }}

<p></P>
	{{ Form::label('defects', 'Defects') }} 
	{{ Form::text('defects', Input::old('defects')) }}

<p></P>
	{{ Form::label('percentage_comp', 'Percentage comp') }} 
	{{ Form::text('percentage_comp', Input::old('percentage_comp')) }}
		{{$errors->first ('percentage_comp')}}

<p></P>
	{{ Form::label('percentage_actual', 'Percentage actual') }} 
	{{ Form::text('percentage_actual', Input::old('percentage_actual')) }}
		{{$errors->first ('percentage_actual')}}

<p></P>
	{{ Form::label('project_rag', 'Project RAG') }} 
	{{ Form::select('project_rag', array(''=>'Select', 'GREEN' => 'GREEN','AMBER' => 'AMBER','RED' => 'RED', 'BLUE' => 'BLUE',  'GREY' => 'GREY', 'NOT SET' => 'NOT SET'), '')}}
		{{$errors->first ('project_rag')}}

<p></P>
	{{ Form::label('comments', 'Comments') }} 
	{{ Form::textarea('comments', Input::old('comments')) }}


<p></P>
	{{ Form::submit('Submit') }}
	<a href='{{URL::previous()}}'>Cancel</a>
	
{{ Form::close() }} 
@stop