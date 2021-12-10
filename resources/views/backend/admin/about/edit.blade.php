
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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit About</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/about/'.$about->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" value="{{$about->name}}" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Designation</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="designation" value="{{$about->designation}}" required>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="description" rows="3" required>
                            {{$about->description}}
                        </textarea>
                    </div>

                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Present Address</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="present_address" value="{{$about->present_address}}" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Parmanent Address</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="parmanent_address" value="{{$about->parmanent_address}}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Old Picture</label>
                    <div class="controls">
                        <img src="/image/{{$about->image}}" style=" height:80px; width:100px;" alt="Category-Image">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Picture Upload</label>
                    <div class="controls">
                        <input type="file" name="image">
                    </div>
                </div>

                {{-- <div class="control-group">
                    <label class="control-label">Old Resume</label>
                    <div class="controls">
                       {{$about->file}}
                    </div>
                </div> --}}

                <div class="control-group">
                    <label class="control-label">Update Resume</label>
                    <div class="controls">
                        <input type="file" name="file">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update About</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->

</div>
@endsection
