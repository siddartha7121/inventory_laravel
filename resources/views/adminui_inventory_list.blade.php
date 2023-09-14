<script>
    function click123(x) {
        // alert(x);
        document.getElementById('exampleInputEmail1').value = x;
        document.getElementById('exampleInputEmail2').value = x;

    }
</script>
@include('main')
@yield('head')
<x-AdminNavbar data=3></x-AdminNavbar>
<div class="container">
    <div class="my-4">
        <h1>INVENTORYS TABLE</h1>
    </div>
    {{-- {{ $data }} --}}
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">deviceId</th>
                <th scope="col">deviceName</th>
                <th scope="col">date</th>
                <th scope="col">assignedTo</th>
                <th scope="col">assignedDate</th>
                <th scope="col">remark</th>
                <th scope="col">image</th>
                <th scope="col">DELETE</th>
                <th scope="col">assign</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->deviceId }}</td>
                    <td>{{ $item->deviceName }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->assignedTo }}</td>
                    <td>{{ $item->assignedDate }}</td>
                    <td>{{ $item->remark }}</td>
                    <td><img class="img" src="{{ asset('storage/' . $item->image) }}" alt=""></td>
                    <td><a href="/delete/{{ $item->deviceId }}"><button
                                class="btn bg-danger text-white ">remove</button></a></td>
                    {{-- /////////////////// --}}
                    <!-- Button trigger modal -->
                    <td><button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter" onclick="click123({{ $item->deviceId }})">
                            ASSIGN
                        </button></td>
                    {{-- <td><a href="/assign/{{ $item->deviceId }}"><button class="btn bg-onclick">assign</button></a></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <span class="pagenation">{{ $data }}</span> --}}
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ASSIGN ITEM TO EMPLOYEE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/assign" method="POST">
                @csrf
                <div class="m-3">
                    <label class="form-label">DEVICE ID</label>
                    <input name="did" type="text" class="form-control" id="exampleInputEmail1" disabled>
                    <input name="did" type="text" class="form-control" id="exampleInputEmail2" hidden>
                </div>
                <div class="m-3">
                    <label class="form-label">DEVICE ID</label>
                    <input name="date" type="date" class="form-control">
                </div>
                <div class="m-3">
                    <select name="eid" class="form-select" aria-label="Default select example">
                        <option selected>Open this select employee</option>
                        @foreach ($edata as $item)
                            <option value="{{ $item->id }}">{{ $item->id }}-->{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ASSIGN</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- ///////// --}}
<!-- Add Bootstrap CSS and JS links -->
{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
