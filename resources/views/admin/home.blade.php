@extends('admin.layouts.app')
@section('body')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card radius-10">
                <div class="card-header border-bottom-0 bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">User List</h5>
                        </div>
                        <div class="ms-auto">
                            <button type="button" class="btn btn-white radius-10">View More</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Shoket id</th>
                                    <th>Status</th>
                                    <th>History</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src="admin_asset/assets/images/icons/shoes.png" class="p-1" alt="">
                                        </div>
                                    </td>
                                    <td>Nike Sports NK</td>
                                    <td>Mitchell Daniel</td>
                                    <td>#9668521</td>
                                    <td>ACTIVE</td>
                                    <td>
                                        <a href="javaScript:;" class="btn btn-sm btn-success radius-30">Call History</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
