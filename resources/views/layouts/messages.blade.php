@foreach (['danger', 'warning', 'success', 'info'] as $key)
    @if(session()->has($key))
	    <div class="alert alert-{{ $key }} alert-dismissible fade show">
	    	{{ session()->get($key) }}
	    </div>
    @endif
@endforeach