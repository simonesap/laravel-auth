@extends('layouts.app')

@section('content')

    <div>
        @forelse ($datas as $data )
        <table class="table">
            <thead>
              <tr>
                <th>title</th>
                <th>content</th>
                <th>image</th>
                <th>slug</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $data->title}}</td>
                <td>{{ $data->content}}</td>
                <td>{{ $data->image}}</td>
                <td>{{ $data->slug}}</td>
              </tr>
              <tr>
                  <td>
                      {{-- <a href="{{route('admin.posts.show', $data->id)}}">
                          View
                      </a> --}}
                  </td>
              </tr>
            </tbody>
          </table>
        @empty

        @endforelse
    </div>

@endsection
