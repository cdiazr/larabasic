<footer class="main-footer">
    @if($setting_chatbot)
    <div class="float-left">
        <img src="{{ asset('img/openai.svg') }}" alt="OpenAI Chat" width="55%">
    </div>
    @endif
    <div class="float-right d-none d-sm-block">
        <b>Version</b> {{ env('APP_VERSION') }}
    </div>
    {{--<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.--}}
</footer>
