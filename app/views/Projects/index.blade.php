@extends('layout.default')

@section('content')

@foreach ($projects as $project)

<uli>{{link_to ("projects/{$project->id}",$project->project_name)}}</uli>
<p></p>
@endforeach
@stop