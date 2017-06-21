@extends('layouts.adminlayout')
@section('content')
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
            <h2>List of beneficiary</h2>
           <a href="{{url('/beneficiary/create')}}" class="btn btn-success"> <i class="pe-7s-plus">Add beneficiary</i></a>

        </div>
    </div>

    <div class="row">
        @foreach($bene as $beneficiary)

            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" />
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="data:image/png;base64,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" alt="..."/>
                            </a>
                                <h4 class="title">{{$beneficiary->name}}<br />
                                    <small>{{$beneficiary->email}}</small>
                                </h4>

                            <br>Category: {{$beneficiary->aoi->type}}<br>
                        </div>

                    </div>
                    <div class="text-center">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <button type="button" rel="tooltip" title="Show" class="btn btn-simple">
                                        <a href="{{ route('beneficiary.show', $beneficiary->bene_id) }}"><i class="pe-7s-look"></i></a>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" rel="tooltip" title="Update" class="btn btn-simple">
                                        <a href="{{ route('beneficiary.edit', $beneficiary->bene_id) }}"><i class="fa fa-edit"></i></a>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('beneficiary.destroy', $beneficiary->bene_id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="sumbit" id="delete-author-{{ $beneficiary->bene_id }}" title="Remove" class="btn btn-danger btn-simple btn-md">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                        {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                        {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>--}}

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection
