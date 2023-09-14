@include('main')
@yield('head')
{{-- @yield('navbar') --}}
<x-AdminNavbar data=0></x-AdminNavbar>
<div class="container w-50">
    <div class="div">
        <h2>ADD EMPLOYEE</h2>
    </div>
    <div class="div">
        <span>{{ $messege }}</span>
    </div>
    <form method="post" action="/add_page">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" id="button_label" class="form-label">NAME</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="employee name" required>
        </div>
        <div class="mb-3">
            <label id="button_label" class="form-label">MOBILE
                NUMBER</label>
            <p class="span" id="numb"></p>
            <input name="mobilenumber" type="number" class="form-control" id="exampleInputmobilenumber"
                aria-describedby="emailHelp" placeholder="employee mibile number" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" id="button_label" class="form-label">EMAIL
                ID</label>
            <input name="emailid" type="email" class="form-control" id="exampleInputEmail11"
                aria-describedby="emailHelp" placeholder="employee email id" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <p class="span" id="pasval"></p>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                placeholder=" password" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Branch</label>
            <select class="form-select" aria-label="Default select example" name="branch" required>
                <option>select employee branch</option>
                <option value="1">EMPLOYEE</option>
                <option value="2">HR</option>
            </select>
        </div>
        <button id="login" name="submit" type="submit" class="btn btn-primary">ADD NEW EMPLOYEE</button>
    </form>
</div>
