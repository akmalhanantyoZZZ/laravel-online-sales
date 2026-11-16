@if(session('ok'))
    <div class="alert alert-ok" style="margin-bottom:16px">{{ session('ok') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger" style="margin-bottom:16px">{{ session('error') }}</div>
@endif
@if($errors->any())
    <div class="alert alert-danger" style="margin-bottom:16px">
        <ul style="margin:0;padding-left:18px">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif