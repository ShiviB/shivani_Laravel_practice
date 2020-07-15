@extends('layouts.master')

@section('content')
<main class="mt-4">
    <div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Posts Listing
            <div class="float-right">
                <a href="{{url('posts/create')}}"><button class="btn btn-sm btn-primary"  >Add New +</button></a>
            </div> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody> 
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                           
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
    </div>
</main>
@endsection