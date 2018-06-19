@extends('layouts.app')
@section('content')
<div class="row col-sm-9 col-md-9 col-lg-9 pull-left">
	<div class="row col-lg-12 col-md-12 col-sm-12" style="background: white margin:10px"; >
	<form method="post" action="{{route ('Academiclevels.create')}}" >
               {{csrf_field()}}
               <input type="text" name="_method" value="put">
               <div class="form-group"> 
               	<label for="name"><span class="required">*</span></label>
               	<input type="text" 
               	        name="name"
               	        id="name" 
               	        required 
               	        placeholder="create new Academic level"
               	        class="form-group"
               	        >


               </div>
		<label >Name*</label>
		
	</form>			
	</div>

</div>


@endsection