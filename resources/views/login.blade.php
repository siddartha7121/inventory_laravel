@include('main')
@yield('head')
<div id="id" class="container p-0">
    <div class="bgimg">
        <div class="row p-0 row d-flex justify-content-end">
            <!-- <div class="col-md-6 p-0"></div> -->
            <div class="col-md-6 p-0 clippath">
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col d-flex justify-content-center my-2">
                        <i class="bi bi-person-circle icon"></i>
                    </div>
                </div>
                <div class="row d-flex justify-content-center position-relative">
                    <div id="admin" class="col d-flex justify-content-center icon position-absolute">
                        <h3>ADMIN</h3>
                    </div>
                    <div id="employee" class="col d-flex justify-content-center icon position-absolute">
                        <h3>EMPLOYEE</h3>
                    </div>
                    <div id="log" class="col d-flex justify-content-center icon position-absolute">
                        <h3>LOGIN</h3>
                    </div>
                </div>
                <div class="formdiv">
                    <div>
                        @if ($message)
                            <h5 class="d-flex justify-content-center text-danger">{{ $message }}</h5>
                        @endif
                    </div>
                    <form action="/login_page" method="POST">
                        @csrf
                        {{-- <span class="link-danger  d-flex justify-content-center">
                            <span class="opacity-0">x</span>
                        </span> --}}
                        <div class=" mb-2">
                            <label class="form-label lable span">Email
                                Id</label>
                            <input name="username" type="email" class="form-control posiitioninput "
                                id="exampleInputEmail1" autocomplete="off" aria-describedby="emailHelp" required>
                        </div>
                        <div>
                            <label class="form-label lable span">Password</label>
                            <div class="row pe-3">
                                <div class="pe-0">
                                    <input name="password" type="password" class="form-control posiitioninput"
                                        id="exampleInputPassword1" required>
                                    <i id="hide" class="bi bi-eye-fill ms-1 fs-4 posiitioneye span " hidden></i>
                                    <i id="display" class="bi bi-eye-slash-fill ms-1 fs-4 posiitioneye span"></i>
                                </div>
                                <p class="text-danger m-0" id='pasval'>
                                    Password must have a minimum
                                    length of 8 characters
                                </p>
                            </div>
                        </div>
                        <div>
                            <input name="key" value="admin" class="radio" type="radio"><label
                                class="span">ADMIN</label>
                            <input name="key" value="employees" class="radio" type="radio"><label
                                class="span">EMPLOYEE</label>
                        </div>
                        <button name="submit" id="login" type="submit" class="btn btn-primary bg-onclick mt-2"><i
                                class=" mt-1 me-3 bi bi-box-arrow-in-right"></i>LOGIN</button>
                        <a class=" link-danger m-5 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                            href="forget_password.php">FORGET
                            PASSWORD</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
