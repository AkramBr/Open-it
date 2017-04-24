@extends('layouts.app')

@section('content')

        <h2 class="animated wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">Les derniers offres</h2>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
            <div class="panel panel-default">
                <div class="panel-heading">Jobs</div>


                <table class="table">
                    <tr>
                        <th>Titre</th>
                        <th>Action</th>
                        </tr>
                    @foreach($jobs as $job)
                    <tr>
                        <td> 
                          {{link_to_route('job.show',$job->titre,[$job->id])}}
                    </td>
                        <td>
                            
                            {!! Form::open(array('route'=>['job.destroy',$job->id],'method'=>'DELETE')) !!}

                            {{link_to_route('job.edit','Edit',[$job->id],['class'=>'btn btn-success'])}}

                            |
                            {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit'])  !!}
                           {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                
            </div>
            {{link_to_route('job.create','Ajouter nouveau',null,['class'=>' btn btn-primary'])}}
        </div>
    </div>
</div>
@endsection
