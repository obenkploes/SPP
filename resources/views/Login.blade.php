<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | SPP Apps</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>
        .card{
            max-width: 400px;
            width: 100%;
        }
        button.active {
            background-color: var(--bs-primary);
            color: brown;
        }
    </style>
</head>
<body>
    <div class="container-fluid align-items-center d-flex vh-100">
        <div class="card mx-auto border-0">
            <div class="card-body">
                <h1 class="h1 text-center text-black-50 mb-5">Selamat datang</h1>
                <ul class="nav nav-tabs nav-justified">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#admin">Admin</button>
                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#siswa">Siswa</button>
                </ul>
                <div class="tab-content" id="nav-tab">
                    <div class="tab-pane fade show active card rounded-0" id="admin">
                        <div class="card-body">
                            Hello
                        </div>
                    </div>
                    <div class="tab-pane fade card rounded-0 " id="siswa">
                        <div class="card-body">
                            Siswa
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        // let menu = document.querySelectorAll('ul.nav a')
        // menu.forEach(element => {
        //     element.addEventListener('click',()=>{
        //         menu.forEach(el => {
        //             el.classList.toggle('active',false)
        //         });
        //         element.classList.toggle(['active','text-bg-primary'])
        //     })
        // });
    </script>
</body>
</html>