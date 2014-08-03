@extends('layout.default')

@section('content')



  <p></p>
  <div class = "table">

<table class = "table table-hover table-condensed table-bordered">
  <tbody>
    <tr>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>PROJECT NAME</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>TOTAL SCENARIOS</b></td>
      <td style="text-align: center; color: rgb(215, 20, 162);"
 valign="undefined"><b>COMPLETED SCENARIOS</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>PENDING SCENARIOS</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>DEFECTS</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>COMPLETED PERCENTAGE</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>EXPECTED PERCENTAGE</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>RAG</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>COMMENTS</b></td>
      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined"><b>UPDATED ON</b></td>
    </tr>

   @foreach ($status as $stat)
   @if (($stat->updated_at->format('d  M'))==$today)
    
   @if ($stat->project_rag=="RED")
       <tr class = "warning">
        @elseif ($stat->project_rag=="GREEN")
        <tr class = "success">
          @elseif ($stat->project_rag=="AMBER")
          <tr class = "danger">
            @elseif ($stat->project_rag=="BLUE")
             <tr class = "info">
              @else ($stat->project_rag=="GREY")
              <tr class = "active">
              @endif
    	
      <td style="text-align: left; color: rgb(0, 0, 1);"
 valign="undefined">

 		{{$stat->project_name}}


	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->scenarios_total}}

	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->scenarios_comp}}

	</td>

      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->scenarios_pending}}

	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->defects}}

	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->percentage_comp}}

	</td>

	 <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->percentage_actual}}

	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->project_rag}}

	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->comments}}

	</td>


      <td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">
 
 		{{$stat->updated_at->format('d  M')}}

	</td>


      <td align="undefined" valign="undefined"></td>


    </tr>
    @endif
@endforeach     
    

@if (Auth::check())


{{Form::open(['route'=> 'status.store'])}}
    <tr>
<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">


	{{ Form::select('project_id',$projects)}}
		{{$errors->first ('project_id')}}
    <p><a href='/projects/create'>Add a new project</a></p>

</td>



<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">



	{{ Form::text('scenarios_total', Input::old('scenarios_total')) }}
		{{$errors->first ('scenarios_total')}}
</td>


<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">



	{{ Form::text('scenarios_comp', Input::old('scenarios_comp')) }}
		{{$errors->first ('scenarios_comp')}}
</td>


<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">


	{{ Form::text('scenarios_pending', Input::old('scenarios_pending')) }}
</td>


<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">



	{{ Form::text('defects', Input::old('defects')) }}
</td>


<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">

	
	{{ Form::text('percentage_comp', Input::old('percentage_comp')) }}
		{{$errors->first ('percentage_comp')}}
</td>


<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">


	{{ Form::text('percentage_actual', Input::old('percentage_actual')) }}
		{{$errors->first ('percentage_actual')}}
</td>


<td style="text-align: center; color: rgb(0, 0, 1);"
 valign="undefined">


	{{ Form::select('project_rag', array(''=>'Select', 'GREEN' => 'GREEN','AMBER' => 'AMBER','RED' => 'RED', 'BLUE' => 'BLUE',  'GREY' => 'GREY', 'NOT SET' => 'NOT SET'), '')}}
		{{$errors->first ('project_rag')}}
</td>


<td style="text-align: center; color: rgb(9, 9, 9);"
 valign="undefined">

	{{ Form::textarea('comments', Input::old('comments')) }}
</td>



    </tr>
 @endif   


  </tbody>
</table>
</div>

@if (Auth::check())
{{ Form::submit('Submit') }}
	<a href='{{URL::previous()}}'>Cancel</a>
	
{{ Form::close() }} 
@endif
<br>

<p></P>
<div class= 'dialog-link'>
	@if (Auth::guest())

<li><a href='/login'><span>Login</span></a> for more options</li>

@endif	




@stop