@if(session()->get('message'))
    <div class="h-[10rem] bg-gray-200 w-screen" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->get('error'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('error') }}
    </div>
@endif

@if(session()->get('must'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('must') }}
    </div>
@endif
