@extends('survey.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <form method="POST" action="{{ route('surveystore') }}">
                @csrf
                <input type="hidden" value="{{ $questionnarie_id }}" name="questionnarie"/>
                @foreach($questions as $question)
                   @if($question['type'] == 'text')
                        <div class="form-group">    
                            <label>{{ $question['order'] }}.- {{ $question['question'] }}</label>
                            <input class="form-control 
                                @if($errors->has($question['id'])) 
                                    {{ "is-invalid" }}
                                @endif" type="text" 
                                    name="{{ $question['id'] }}"/>
                            @if($errors->has($question['id']))
                                <div class="invalid-feedback">{{ $errors->first($question['id']) }}</div>
                            @endif
                        </div><!-- .form-group -->
                   @endif
                   @if($question['type'] == 'select')
                        <div class="form-group">
                            <label>{{ $question['order'] }}.- {{ $question['question'] }}</label>
                            <select class="form-control 
                                @if($errors->has($question['id'])) 
                                    {{ "is-invalid" }}
                                @endif" type="text" 
                                    name="{{ $question['id'] }}"/" name="{{ $question['id'] }}">
                                @foreach($question['options'] as $option)
                                    <option value="{{ key($option) }}">
                                        {{ $option[key($option)] }}
                                    </option>
                                @endforeach
                            </select><!-- .form-control -->
                            @if($errors->has($question['id']))
                                <div class="invalid-feedback">{{ $errors->first($question['id']) }}</div>
                            @endif
                        </div><!-- .form-group-->
                   @endif
                   @if($question['type'] == 'radio')
                        <div class="form-group">
                            <label>{{ $question['order'] }}.- {{ $question['question'] }}</label><br/>
                            @foreach($question['options'] as $option)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="{{ $question['id']}}" value="{{ key($option) }}"/>
                                    <label>{{ $option[key($option)] }}</label>
                                </div><!-- .form-check .form-check-inline -->
                            @endforeach
                            @if($errors->has($question['id']))
                                <div class="invalid-feedback">{{ $errors->first($question['id']) }}</div>
                            @endif
                        </div><!-- .form-group -->
                   @endif
                   @if($question['type'] == 'longtext')
                        <div class="form-group">
                            <label>{{ $question['order'] }}.- {{ $question['question']}}</label>
                            <textarea class="form-control" rows="5" colums="10" name="{{ $question['id'] }}">
                                {{$errors->has('3')}}
                            </textarea>
                            @if($errors->has('2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first($question['id']) }}
                                </div>
                            @endif
                        </div><!-- .form-group -->
                   @endif
                @endforeach
                <button class="btn btn-primary">Enviar</button>
            </form>
        </div><!-- .jumbotron -->
    </div><!-- .row -->
</div>
@endsection