@extends('layouts.runnerlayout')

@section('menu')
<div class="col-md-5 hidden-xs">
    <div class="description">
     <!--    <h2>Dashboard</h2> -->
    </div>
</div>
<div class="col-md-6 col-md-offset-1">

</div>

@endsection

@section('content')
 <div class="row">

    <div class="col-md-12">
<center><h3>UPCOMING EVENTS</h3></center>
  

   <div class="card-container">
   @foreach($event as $events)

        <div class="card">
           

             <div  class="card-image">
            <img width="100%" height="100%" src="/{{$events->userfile}}"></img>
          </div>


                 <div class="card-info">
                    <div class="card-title">

                   <h4> <center>{{$events->name}} </center> </h4>


                                  
            
                    </div>

      <div class="card-detail"><br><br>
  <center>{{$events->description}} </center>
</div>
    </div>



    <div class="card-social">   
       @if(!Auth::guard('user')->user())
       <a class="button" href="{{ url('/login') }}">View Event </a>
                        
                          @else
    <a class="button" href={{ route('events.show', $events->event_id) }}>View Event </a>
   @endif
    </div>

  </div>
   @endforeach
  
 </div>

 

        

 </div> 
</div>

@endsection

