<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>
    <body
        class="d-flex align-items-center justify-content-center"
        style="height: 100vh"
    >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div
                            class="card-header bg-primary text-white text-center"
                        >
                            Login
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        id="email"
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autofocus
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input
                                        id="password"
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        required
                                    />
                                </div>

                                <div class="form-group mb-0">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block"
                                    >
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <p>
                                    Don't have an account?
                                    <a href="{{ route('register') }}"
                                        >Register here</a
                                    >.
                                </p>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
