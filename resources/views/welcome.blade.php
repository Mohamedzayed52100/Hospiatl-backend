<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/hosting-services.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
    <title>Sign in- Hospital</title>
</head>

<body>
    <section>
        <nav>
            {{-- <div class="brand">
                <img src="./images/hosting-services.png" alt="hosting" />
                <a href="/">Hostque</a>
            </div> --}}

            {{-- <i class="fa fa-bars" aria-hidden="true"></i> --}}
            {{-- <ul>
                <i class="fa fa-times" aria-hidden="true"></i>
                <li><a href="/">Home</a></li>
                <li><a href="./pricing.html">Pricing</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./login.html">Sign in</a></li>
            </ul> --}}
        </nav>

        <div class="login">
            <h1>Sign in</h1>
            <form action="/loginsubmit" method="post">
                @csrf

                <div class="form-item">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required />
                </div>

                <div class="form-item">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>

                <div class="form-item">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                @if (Session::has('notfound'))
                    <div class="alert alert-success">

                        <div>{{ Session::get('notfound') }}</div>
                    </div>
                @endif
                {{-- <button type="submit">Sign in</button> --}}
            </form>
        </div>


    </section>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
</body>

</html>
