<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://cdn.tiny.cloud/1/wanmc9yjjc89lwxc6vhetlu6pmcz9oa6qepj76w9r6iby1jy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .containerr {
            display: flex;
            justify-content: space-between;
        }

        img {
            width: 100%;
            height: 300px;
        }

        .card p {
            text-align: center;
            font-size: 25px;
        }

        p span {
            color: red;
        }
        .write{
            text-align: center;
            font-size: 25px;
            color: #07d5f0;
        }
        .addp{
            position: relative;
            left: 47%;


        }

    </style>
</head>

<body>

    <div class="containerr">
        <div class="card" style="width: 18rem;">
            <img src="img/department.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">this is the <span>departments</span> of hospital </p>
            </div>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="doctors" role="button"
                aria-controls="offcanvasExample">
                visit </a>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/doctors.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">this is the <span>doctor</span> department</p>
            </div>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="alldocors" role="button"
            aria-controls="offcanvasExample">
            visit </a>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/nurse.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">this is the <span>nursery</span> department</p>
            </div>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            visit </a>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/pation.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">this is the <span>pation</span> department</p>
            </div>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="addpation" role="button"
            aria-controls="offcanvasExample">
            visit </a>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/staff.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">this is the <span>staff</span> department</p>
            </div>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="addstaff" role="button"
            aria-controls="offcanvasExample">
            visit </a>
        </div>

    </div>
    <br>
    <a class="btn btn-primary  " data-bs-toggle="offcanvas" href="zipFile" role="button"
    aria-controls="offcanvasExample">
    Downlaod photo </a>
    <a class="btn btn-primary  " data-bs-toggle="offcanvas" href="addphoto" role="button"
    aria-controls="offcanvasExample">
    Add photo </a>

    <a style="margin-left: 20px"class="btn btn-primary  " data-bs-toggle="offcanvas" href="gallery" role="button"
    aria-controls="offcanvasExample">
    Mangers </a>
    <a style="margin-left: 20px"class="btn btn-primary  " data-bs-toggle="offcanvas" href="/loginsubmit/arr" role="button"
    aria-controls="offcanvasExample">
    Arabic </a>
    <a style="margin-left: 20px"class="btn btn-primary  " data-bs-toggle="offcanvas" href="/loginsubmit/en" role="button"
    aria-controls="offcanvasExample">
    Englist </a>
    <br>
    <p class="write">{{__('welcome.name')}}</p>
    <p class="write">{{__('welcome.mess')}}</p>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Tiny MEC Html Editor
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                              <textarea id="mytextarea" name="mytextarea">   </textarea>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     </section>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        });
      </script>

</html>
