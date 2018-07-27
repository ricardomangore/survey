@extends('survey.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <form>
                @csrf
                @foreach($questions as $question)
                   @if($question['type'] == 'text')
                        <div class="form-group">    
                            <label>{{ $question['question'] }}</label>
                            <input class="form-control " type="text" name="{{ $question['name'] }}"/>
                        </div><!-- .form-group -->
                   @endif
                   @if($question['type'] == 'select')
                        <div class="form-group">
                            <label>{{ $question['question'] }}</label>
                            <select class="form-control" name="{{ $question['name'] }}">
                                @foreach($question['options'] as $option)
                                    <option value="{{ key($option) }}">
                                        {{ $option[key($option)] }}
                                    </option>
                                @endforeach
                            </select><!-- .form-control -->
                        </div><!-- .form-group-->
                   @endif
                   @if($question['type'] == 'radio')
                        <div class="form-group">
                            <label>{{ $question['question'] }}</label><br/>
                            @foreach($question['options'] as $option)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="{{ $question['name']}}" value="{{ key($option) }}"/>
                                    <label>{{ $option[key($option)] }}</label>
                                </div><!-- .form-check .form-check-inline -->
                            @endforeach
                        </div><!-- .form-group -->
                   @endif
                   @if($question['type'] == 'longtext')
                        <div class="form-group">
                            <label>{{ $question['question']}}</label>
                            <textarea class="form-control" rows="5" colums="10">
                            </textarea>
                        </div><!-- .form-group -->
                   @endif
                @endforeach
                <button class="btn btn-primary">Enviar</button>
            </form>
        </div><!-- .jumbotron -->
    </div><!-- .row -->
</div>
@endsection