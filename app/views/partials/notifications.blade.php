@if ($errors->any())
<div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    Please check the form below for errors
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ $message }}
</div>
@endif

@if ( Session::get('usererror') )
    <div class="alert alert-error">
        @if ( is_array(Session::get('usererror')) )
            {{ head(Session::get('usererror')) }}
        @endif
    </div>
@endif

@if ( Session::get('notice') )
    <div class="alert">{{ Session::get('notice') }}</div>
@endif
