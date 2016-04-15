@if($errors->has($name))
<span class="help-block">
@foreach($errors->get($name) as $error)
<div>{{ $error }}</div>
@endforeach
</span>
@endif
