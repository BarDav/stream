@extends('layouts.main')

@section('content')
    <div id="stream" >
        @can('createStream',$user)
        <input type="checkbox" v-on="click : toggleStream" v-model="streaming" />
        <div class="alert alert-success" v-if="isStreaming">Great! You are now online</div>
        <div class="alert alert-info" v-if="!isStreaming">You are now offline,to start streaming click on checkbox</div>
        @endcan
        <div v-if="isStreaming">
            <iframe src="http://www.twitch.tv/davbarsegh/embed" frameborder="0" scrolling="no" height="378" width="620"></iframe>
            <iframe src="http://www.twitch.tv/davbarsegh/chat?popout=" frameborder="0" scrolling="no" height="500" width="350"></iframe>
        </div>
        @cannot('createStream',$user)
        <div class="alert alert-info" v-if="!isStreaming">
            Sorry,there are no current streamings
        </div>
        @endcannot
    </div>
@endsection

@section('scripts')
    <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
    <script src="{{ elixir('js/app.js') }}" type="text/javascript"></script>
@endsection