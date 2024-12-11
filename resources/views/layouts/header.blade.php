<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('catalogue.index') }}">Katalog</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('distributor.index') }}">Distributor</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('upload.index') }}">Uploads</a>
            </li>
        </ul>
    </div>
</nav>
