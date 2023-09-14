@include('main')
@yield('head')
<x-AdminNavbar data=2></x-AdminNavbar>
<div class="container w-50">
    <div class="div">
        <h2>ADD NEW DEVICE</h2>
    </div>
    <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" id="button_label" class="form-label">DEVICE NAME</label>
            <input name="devicename" type="text" class="form-control" id="exampleInputEmail1"
                placeholder="please enter the new device name" required>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">PLEASE
                ATTACH DEVICE
                IMAGE</label>
            <input name="image12" class="form-control form-control-sm" id="formFileSm" type="file"
                accept="image/jpeg, image/png, image/gif,image/jpg">

        </div>
        <button name="submit" type="submit" class="btn btn-primary">ASSIGN</button>
</div>
</form>
</div>
