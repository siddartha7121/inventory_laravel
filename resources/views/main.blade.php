@section('head')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['./resources/css/app.css', './resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <title>inventorymanagement</title>
    </head>

    <body class="body mt-3">
        <!-- logo of product -->
        <div class="container mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-5">
                    <a href="main.php"><img id="logo"
                            src="https://www.infanion.com/sites/default/files/Infanion_logo.png" alt="logo of infanion"></a>
                </div>
            </div>
        </div>
    @endsection
    @section('navbar')
        {{-- {{ $x = ['ADD EMPLOYEE', 'EMPLOYEE LIST', 'ADD INVENTORY', 'INVNETORY LIST', 'ASSIGN INVENTORY'] }} --}}
        <ul class="nav bg-light justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="adminAddEmp.php">
                    <button class="btn common-button">ADD EMPLOYEE</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="adminAddEmp.php">
                    <button class="btn common-button">ADD EMPLOYEE</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="adminAddEmp.php">
                    <button class="btn common-button">ADD EMPLOYEE</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="adminAddEmp.php">
                    <button class="btn common-button">ADD EMPLOYEE</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="adminAddEmp.php">
                    <button class="btn common-button">ADD EMPLOYEE</button>
                </a>
            </li>
        </ul>
    @endsection
