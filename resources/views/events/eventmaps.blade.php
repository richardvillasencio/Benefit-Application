@extends('layouts.adminlayout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center gtco-heading animate-box">
                  
                 <!--    <a href="{{url('/events')}}" class="btn btn-success"> <i class="pe-7s-plus">All Events</i></a> -->
                  
                    <div class="tab-content">
                        <div id="active" class="tab-pane fade in active">
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="bg-info">
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Organizer</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($event as $events)
                                        <tr>
                                            <td>{{$events->event_id}}</td>
                                            <td>{{$events->name}}</td>
                                            <td>{{$events->description}}</td>
                                            <td> <a class="button" href={{ url('viewLocation', $events->event_id) }}>Track event</a></td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>



@endsection