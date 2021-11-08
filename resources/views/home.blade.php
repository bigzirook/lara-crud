@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @include('flash')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <a href="{{route('new_form')}}" >{{__('Add Form')}}</a>
                    <div class="container" >
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($form_details->count() > 0)
                                @foreach($form_details as $key =>$form_detail )
                                <tr>
                                    <th scope="row">{{($form_details->currentpage()-1)*$form_details->perpage()+$key+1}}</th>
                                    <td>{{$form_detail->user_id}}</td>
                                    <td>{{$form_detail->complete_status != true ? "Incomplete":"Complete"}}</td>
                                    <td>
                                    <a href="{{route('edit_form',$form_detail->id)}}">{{__('Edit')}}</a>
                                    <a onclick="return confirm('Are you sure want to delete?')" href="{{route('delete_form',$form_detail->id)}}">{{__('Delete')}}</a></td>
                                </tr>
                                @endforeach
                            @endif
                            
                        </tbody>
                        </table>
                        {{ $form_details->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
