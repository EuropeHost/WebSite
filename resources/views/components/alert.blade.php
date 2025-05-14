@if(session('status'))
    <div>
        <i class="bi bi-info-circle"></i> {{ session('status') }}
    </div>
@endif
