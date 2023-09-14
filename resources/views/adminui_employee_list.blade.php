@include('main')
@yield('head')
<x-AdminNavbar data=1></x-AdminNavbar>
{{-- {{ $data[0]->name }} --}}
<div class="container">
    <div class="my-4">
        <h1>EMPLOYEES TABLE</h1>
    </div>
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">mobilenumber</th>
                <th scope="col">email id</th>
                <th scope="col">branch</th>
                <th scope="col">image</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->mobilenumber }}</td>
                    <td>{{ $item->emailid }}</td>
                    <td>{{ $item->branch }}</td>
                    <td>{{ $item->image }}</td>
                    <td><a href="/adminui_employee_list/{{ $item->id }}">remove</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<span class="pagenation">{{ $data }}</span>
