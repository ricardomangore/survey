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
                            <select class="form-control">
                                @foreach($question['options'] as $option)
                                    <option>{{ $option }}</option>
                                @endforeach
                            </select>
                        </div><!-- .form-group -->
                   @endif
                   @if($question['type'] == 'radio')
                    <div class="form-group">
                        <label>{{ $question['question'] }}</label>
                        @foreach($question['question'] as $option)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name=""/>
                                <label>{{ $option }}</label>
                            </div><!-- .form-check .form-check-inline -->
                        @endforeach
                    </div><!-- .form-group -->
                   @endif
                @endforeach
            </form>
        </div><!-- .jumbotron -->
    </div><!-- .row -->
</div>
@endsection