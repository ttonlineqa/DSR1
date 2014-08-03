@extends ('layout.default')


@section ('content')


<P>Project Name: {{$project->project_name}}</P>
<P>Project ID: {{$project->id}}</P>
<P>Category: {{$project->project_cat}}</P>
<P>Sub Category: {{$project->project_sub_cat}}</P>
<P>Project Start Date: {{$project->project_startdate}}</P>
<P>Project End Date: {{$project->project_enddate}}</P>
<P>Project Entry Created date: {{$project->created_at}}</P>
<P>Project Last Updated on: {{$project->updated_at}}</P>

@stop
