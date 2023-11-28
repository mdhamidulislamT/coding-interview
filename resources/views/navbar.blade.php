<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Coding Interview</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admins') }}">Admins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('customers') }}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('employees') }}">employees</a>
                </li>
            </ul>
            <div class="d-flex float-right">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('message-categories') }}">Message Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('messages') }}">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('my-messages') }}"><strong>My Messages</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
