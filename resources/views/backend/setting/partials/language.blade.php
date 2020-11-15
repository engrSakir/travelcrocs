<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header thead-primary shadow-primary"><i class="fa fa-table"></i> Locals</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered text-center">
                        <thead class="thead-primary shadow-primary">
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($languages as $language)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $language->name }}</td>
                            <td>{{ $language->language }}</td>
                            <td>
                                <div class="btn-group m-1">
                                    <button type="button" class="btn btn-outline-info waves-effect waves-light"> <i class="fa fa-edit"></i> </button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light"> <i class="fa fa fa-trash-o"></i> </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot class="shadow-primary">
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Row-->
