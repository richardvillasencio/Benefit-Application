@extends('layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center gtco-heading animate-box">
                    {{--<h2>Events</h2>--}}
                    <a href="{{url('/events')}}" class="btn btn-success"> <i class="pe-7s-plus">All Events</i></a>
                    <div>
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
                                @foreach($events as $event)

                                    @if ($event->status === 'Active')
                                        <tr>
                                            <td>{{$event->event_id}}</td>
                                            <td>{{$event->name}}</td>
                                            <td>{{$event->description}}</td>
                                            <td>{{$event->organizer}}</td>
                                            <td>{{$event->status}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection