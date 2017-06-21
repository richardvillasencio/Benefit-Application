@extends('layouts.runner')

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
<center><h3 style="font-style: initial;color:white;">EVENTS</h3></center>
  <br>

   <div class="card-container">
   @foreach($events as $event)



        <div class="card">
          <div  class="card-image">
            <img width="100%" height="100%" src="/{{$event->userfile}}"></img>
          </div>
           
                 <div class="card-info">
                    <div class="card-title" style="margin-top:-10px;">

                    <h3>{{$event->name}}</h3>


            
                    </div>

      <div class="card-detail">
      <br><br>
  <center>{{$event->description}} </center>
</div>
    </div>



    <div class="card-social">   
    
    <a class="button" href={{ route('events.show', $event->event_id) }}>View Event </a>
  
    </div>

  </div>
   @endforeach
  
 </div>

 

        

 </div> 
</div>

@endsection

