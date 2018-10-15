@extends('admin.layouts.master')
@section('page')
   Add Products

    @endsection
@section('content')

    <div class="row">
        <div class="col-lg-10 col-md-10">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Product</h4>
                </div>


                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as  $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="content">
                    {!! Form::open(['url' => 'products', 'files' => 'true']) !!}

                        <div class="row">
                            <div class="col-md-12">
@include('admin.products._fields')
                        <div class="form-group">
                            {{ Form::submit('Add Product',['class'=>'btn btn-info btn-fill btn-wd' ]) }}
                        </div>
                        <div class="clearfix"></div>
                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

   {{-- <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">All Products</h4>
                    <p class="category">List of all stock</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>This is the descirption of the product</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>--}}



@endsection
