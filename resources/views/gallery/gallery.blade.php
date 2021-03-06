@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>My Galleries</h1>
        </div>
    </div>

    <div class="row">
        <!-- list of galleries -->
        <div class="col-md-8">
            @if($galleries->count() > 0)
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                    <tr class="info">
                        <th>Name of the gallery</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->name }}</td>
                            <!-- this will contain a link to view the chosen gallery -->
                            <td><a href="{{ url('/gallery/view/' . $gallery->id) }}">View</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- form to add galleries -->
        <div class="col-md-4">
            <!-- if any, output errors -->
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form" method="POST" action="{{ url('gallery/save') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input class="form-control"
                           type="text"
                           name="gallery_name"
                           id="gallery_name"
                           placeholder="Name of the gallery"
                           value="{{ old('gallery_name') }}"/>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>

    </div>
@endsection