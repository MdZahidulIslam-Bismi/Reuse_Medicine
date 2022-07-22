@extends('pages.dashboard')
@section('content')
    <div>
        <table class="table">
            <tr>
                <th>medicine name</th>
                <th>Request User name</th>
                <th>Status</th>
                <th>Change Status</th>
            </tr>
            @foreach($getMedicine as $val)
            <tr>   
                <td>{{$val->medicineName}}</td>
                <td>@php $user = DB::table('users')->where('id', $val->request_id)->first(); @endphp
                    {{$user->name ?? ''}}
                </td>
                <td>@if($val->request_id==NULL && $val->approved==NULL)
                                  Request
                    @elseif($val->request_id != NULL && $val->approved==NULL)
                                  Requested
                                @else
                                  Approved
                                @endif
                </td>
                <td>
                    <a href="{{route('approveGetMedicine', $val->id)}}">approve</a>
                    <a href="{{route('rejectGetMedicine', $val->id)}}">Reject</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection('contetnt')




@extends('pages.dashboard')
@section('content')
    <div>
        <table class="table">
            <tr>
                <th>medicine name</th>
                <th>Request User name</th>
                <th>Status</th>
                <th>Change Status</th>
            </tr>
            @foreach($getMedicine as $val)
            <tr>   
                <td>{{$val->medicineName}}</td>
                <td>@php $user = DB::table('users')->where('id', $val->request_id)->first(); @endphp
                    {{$user->name ?? ''}}
                </td>
                <td>@if($val->request_id==NULL && $val->approved==NULL)
                                  Request
                    @elseif($val->request_id != NULL && $val->approved==NULL)
                                  Requested
                                @else
                                  Approved
                                @endif
                </td>
                <td>
                    <a href="{{route('approveGetMedicine', $val->id)}}">approve</a>
                    <a href="{{route('rejectGetMedicine', $val->id)}}">Reject</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection('contetnt')