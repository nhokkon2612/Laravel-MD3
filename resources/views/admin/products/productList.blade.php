@extends('admin.core.master');
@section('title' , 'Product List')

@section('content')

    <body id="page-top">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Book List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Book Name</th>
                                        <th>Description</th>
                                        <th>Cost</th>
                                        <th>Price</th>
                                        <th>Author</th>
                                        <th>Categories</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse( $products as $key=>$product )
                                            <tr>
                                                <th></th>
                                                <th>{{$product->name}}</th>
                                                <th>{{$product->description}}</th>
                                                <th>{{$product->cost}}</th>
                                                <th>{{$product->price}}</th>
                                                @if($product->author)
                                                    <td>
                                                        {{$product->author->name}}
                                                    </td>
                                                @else
                                                    <td>
                                                        Chua co Tac gia
                                                    </td>
                                                @endif
                                                <td>
                                                    @forelse($product->categories as $category)
                                                        <p>{{$category->name}}</p>
                                                    @empty
                                                        Khong thuoc the loai nao
                                                    @endforelse
                                                </td>
                                                <td>
                                                    <a href="{{route('Product.update',['id'=>$product->id])}}">Update</a>
                                                    <a href="{{route('Product.delete',['id'=>$product->id])}}">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <th>No Book Ib Here</th>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{$products->links()}}

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template-layout/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template-layout/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template-layout/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template-layout/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template-layout/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template-layout/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template-layout/js/demo/datatables-demo.js')}}"></script>

    </body>


@endsection


