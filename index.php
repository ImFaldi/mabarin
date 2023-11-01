<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        p:before{
            content: "";
            display: block;
            width: 25%;
            height: 2px;
            background: whitesmoke;
            position: absolute;
            left: 20%;
            top: 80%;
        }
        .tengah{
            margin-left: 50%;
            margin-top: 9%;
        }
    </style>
</head>

<body style="background-color: #141414;">
    <div class="container-fluid">
        <nav class="navbar bg-body-dark border-bottom">
            <div class="container-fluid">
                <img src="assets/LOGO.png" alt="logo">
                <form class="d-flex" role="search">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign Up</button>
                    <button class="btn btn-warning ms-3" type="submit">Log In</button>
                </form>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/game_lists.png" class="d-block w-70" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Selamat Datang Di Mabarin</h4>
                    <h5 class="text-center" style="font-weight: 400;">Sudah memiliki akun? <a style="font-weight: 400;">Log In</a></h5>
                    <div class="input-group mb-3 mt-5 container">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 container">
                        <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 container">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p style="color: #FFBD41; " class="tengah">Pemilihan Mode</p>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>