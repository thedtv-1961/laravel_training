@if(session()->has('flash.message'))
    <div class="alert alert-{{session('flash.class')}}">
        <p>{{session('flash.message')}}</p>
    </div>
@endif
