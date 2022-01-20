@extends("layouts.admin")

@section("title","Edit Page")

@section("admincontent")
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User Roles</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>User Roles </h5>
                        @include('home.message')
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                         <table>

                             <tr>
                                 <th>Id</th><td>{{ $data -> id }}</td>
                             </tr>

                             <tr>
                                 <th>Name</th><td>{{ $data -> name }}</td>
                             </tr>

                             <tr>
                                 <th>Email</th><td>{{ $data -> email }}</td>
                             </tr>

                             <tr>
                                 <th>Roles</th>
                                 <td>
                                     @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{ $row -> name }}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid' => $data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure?')" >Sil</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                 </td>
                             </tr>

                             <tr>
                                 <th>Add Role</th>
                                 <td>
                                     <form role="form" action="{{ route('admin_user_role_add',['id'=>$data->id] )}}" >
                                         @csrf
                                         <select name="roleid">
                                             @foreach($datalist as $rs )
                                                 <option value="{{ $rs -> id  }}">{{ $rs->name }}</option>
                                             @endforeach
                                         </select>
                                        <button type="submit" class="btn btn-primary"> Add Role </button>
                                     </form>
                                 </td>
                             </tr>

                         </table>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
