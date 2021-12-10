
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
                          <th style="width:5px;">Title</th>
                          <th style="width:50px;">Description</th>
                          <th style="width:5px;">Image</th>
                          <th style="width:15px;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                        @foreach ($portfolio as $portfolio)

                     <tr>

                        <td>{{$portfolio->title}}</td>
                        <td class="center">{!! $portfolio->description !!}</td>
                        <td class="center">
                            <img src="/portfolioimage/{{$portfolio->image}}" style=" height:80px; width:100px;" alt="Portfolio-Image">
                        </td>
                        <td class="row">
                            <div class="span3"></div>

                                <div class="span4">
                                    <a  class="btn btn-secondary mb-2" href="{{url('portfolio/'.$portfolio->id.'/edit')}}">Edit</a>
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                </div>
                                <div class="span4">
                                    <form action="{{url('portfolio/'.$portfolio->id)}}" method="POST">
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
