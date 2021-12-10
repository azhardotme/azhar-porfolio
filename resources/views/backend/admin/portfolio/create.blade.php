
@extends('backend.admin.admin_master')
@section('content')

<div class="container">


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="row-fluid sortable">
<div class="box span12">
    <p class="alert-success">
        @php
        $message=Session::get('message');
        if($message){
            echo "$message";
            Session::put('message',null);
        }
    @endphp
    </p>
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Portfolio</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/portfolio')}}" method="post" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Title</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="title" placeholder="Title" required>
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="description" rows="3" required></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Image</label>
                    <div class="controls">
                        <input type="file" class="input-xlarge" name="image" required>
                    </div>
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add Portfolio</button>
                </div>
            </fieldset>
        </form>
    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->

</div>
@endsection
