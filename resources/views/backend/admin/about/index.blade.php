
@extends('backend.admin.admin_master')
@section('content')

<div class="container">

    <div class="row-fluid sortable">

        <div class="box span12">

                @php
                $message=Session::get('message');
                if($message){
                    echo "$message";
                    Session::put('message',null);
                }
               @endphp


            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">

                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>

                          <th style="width:5px;">Name</th>
                          <th style="width:5px;">Designation</th>
                          <th style="width:50px;">Description</th>
                          <th style="width:20px;">Image</th>
                          <th style="width:5px;">Resume</th>
                          <th style="width:15px;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                        @foreach ($about as $about)

                     <tr>

                        <td>{{$about->name}}</td>
                        <td>{{$about->designation}}</td>
                        <td class="center">{!! $about->description !!}</td>
                        <td class="center">
                            <img src="{{ asset('/image/'.$about->image) }}" alt="image"  >
                        </td>

                        <td class="center">
                            <a href="/about/download/{{$about->file}}">Download</a>
                        </td>

                        <td class="row">
                            <div class="span3"></div>

                                {{-- <div class="span4">
                                    <a class="btn btn-info" href="{{url('/about/'.$about->id.'/edit')}}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                </div> --}}
                                <div class="span4">
                                    <form action="{{url('/about/'.$about->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="halflings-icon white trash"></i>
                                        </button>
                                    </form>

                                </div>
                            <div class="span3"></div>
                        </td>
                    </tr>
                    @endforeach

                  </tbody>
              </table>
            </div>
        </div><!--/span-->

    </div><!--/row--

</div>
@endsection
