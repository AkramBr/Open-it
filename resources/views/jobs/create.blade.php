@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Jobs</div>

                <div class="body-panel">
                        {!! Form::open(array('route'=>'job.store')) !!}

                            <div class="form-group">

                                {!! Form::label('titre','enter titre') !!}
                                {!! Form::text('titre',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="form-group">
                            
                                {!! Form::label('description','Entrer votre Description') !!}
                                {!! Form::textarea('description',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="form-group">
                            
                                {!! Form::button('crée votre offre',['type'=>'submit','class'=>'btn btn-primary']) !!}
                                

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
