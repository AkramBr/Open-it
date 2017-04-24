@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mettre a jours Jobs</div>

                <div class="body-panel">
                        {!! Form::model($job,array('route'=>['job.update',$job->id],'method'=>'PUT')) !!}

                            <div class="form-group">

                                {!! Form::label('titre','Saisir votre titre') !!}
                                {!! Form::text('titre',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="form-group">
                            
                                {!! Form::label('description','Saisire votre description ') !!}
                                {!! Form::textarea('description',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="form-group">
                            
                                {!! Form::button('Mettre a jour ',['type'=>'submit','class'=>'btn btn-primary']) !!}
                                

                            </div>                            

                        {!! Form::close() !!}


                </div>
            </div>
                @if($errors->has())
                <ul class="alert alert-danger">
                    
                
                @foreach($errors->all() as $error)
                  <li>  {{ $error }}</li>
                @endforeach
                </ul>
                @endif
        </div>
    </div>
</div>
@endsection
