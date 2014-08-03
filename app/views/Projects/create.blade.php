@extends('layout.default')

@section('content')


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</div>

<p></p>
<h1>Add a new Project</h1>

{{Form::open(['route'=> 'projects.store'])}}


</div>
{{Form::label('project_name', 'Project Name*: ')}}
{{Form::input('varchar','project_name')}}
{{$errors->first ('project_name')}}

</div>
<p></p>
<div>

{{Form::label('project_cat', 'Project Category*: ')}}
{{Form::select('project_cat', array(''=>'Select','Sales' => 'Sales', 'MyAccount' => 'MyAccount', 'Device Testing' => 'Device testing', 'Automation' => 'Automation'),'')}}
{{$errors->first ('project_cat')}}
</div>

<p></p>

<div>

{{Form::label('project_sub_cat', 'Project Sub Category : ')}}
{{Form::input('varchar','project_sub_cat')}}
{{$errors->first ('project_sub_cat')}}
</div>


<p></p>
<div>

{{Form::label('project_rag', 'Default Project RAG : ')}}
{{Form::select('project_rag', array(''=>'Select', 'GREEN' => 'GREEN','AMBER' => 'AMBER','RED' => 'RED', 'BLUE' => 'BLUE',  'GREY' => 'GREY', 'NOT SET' => 'NOT SET'), '')}}
{{$errors->first ('project_rag')}}
</div>

<p></p>

<p></p>
<div>

{{Form::label('project_owner', 'Project Owner : ')}}
{{Form::input('varchar','project_owner')}}
{{$errors->first ('project_owner')}}
</div>

<p></p>

<p></p>
<div>

{{Form::label('project_startdate', 'Project Start Date* : ')}}
{{Form::input('date','project_startdate')}}
{{$errors->first ('project_startdate')}}
</div>

<p></p>

<p></p>
<div>

{{Form::label('project_enddate', 'Project End Date : ')}}
{{Form::input('date','project_enddate')}}
{{$errors->first ('project_enddate')}}
</div>

</div>

<p></p>



<div>{{Form::Submit('Add Project')}}

</div>
{{Form::close()}}

@stop