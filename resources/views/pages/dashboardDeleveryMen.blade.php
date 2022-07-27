@extends('pages.dashboard')
@section('content')
    <div>
            <table class="table table-dark table-sm">
            <thead>
            <tr>
            <th scope="col">SL No</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Dipto</td>
            <td>0184665466</td>
            <td>House-12/7, block-2, Gulshan </td>  
            <td>Active</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection('contetnt')



