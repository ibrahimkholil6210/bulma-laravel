@if ($errors->any())
    <div class="notification is-danger">
        <button class="delete"></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="notification is-success">
        <button class="delete"></button>
        <strong>{{ session('success') }}</strong>
    </div>
@endif

@if (session('error'))
    <div class="notification is-danger">
        <button class="delete"></button>
        <strong>{{ session('error') }}</strong>
    </div>
@endif