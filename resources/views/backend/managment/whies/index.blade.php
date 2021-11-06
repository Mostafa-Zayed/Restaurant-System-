@extends('backend.layout.app')
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="app-page-title"> <span> <i class="fas fa-bars"></i> </span>Featuries</h1>
            </div>
            <div class="col-lg-3 mb-2">
                <div class="col-auto text-right">
                    <a class="btn app-btn-secondary" href="{{route('managment.whies.create')}}"> <i class="fas fa-plus"></i> Create Feature</a>
                </div>
            </div>
        </div>
        @if(session()->has('success'))
        @include('backend.includes.success')
        @endif
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Order</th>
                                                <th class="cell">Title</th>
                                                <th class="cell">Description</th>
                                                <th class="cell">Status</th>
                                                <th class="cell" colspan="4" style="text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($rows->count() > 0)
                                            @foreach($rows as $row)
                                            <tr>
                                                <td class="cell">#{{$row->id}}</td>
                                                <td class="cell"><span class="truncate">{{$row->title}}</td>
                                                <td class="cell"><span class="truncate">{{$row->description}}</td>
                                                <td class="cell"><span class="btn badge bg-success">{{isset($row->status) ? $row->status : 'off'}}</span></td>
                                                <td class="cell"><a class="btn app-btn-secondary" href="#">View</a></td>
                                                <td class="cell"><a class="btn badge bg-warning" href="{{route('managment.categories.edit',$row->id)}}">Edit</a></td>
                                                <td class="cell"><a class="btn badge bg-danger" href="#">Trashed</a></td>
                                                <td class="cell">
                                                    <form action="{{route('managment.categories.destroy',$row->id)}}" method="post">
                                                        @csrf 
                                                        {{method_field('DELETE')}}
                                                        <button type="submit" class="btn badge bg-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">{{$rows->links()}}</ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection