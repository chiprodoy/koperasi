@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="blog-details">
            <h4>{{$RECORD->title}}</h4>
            <div class="single-blog-content-top">
                {!! $RECORD->description !!}
            </div>
            <div class="card comment-box">
                <div class="card-body">
                    <h5>Komentar</h5>
                    <ul>
                        @foreach ($RECORD->comments as $comment)

                        <li>
                            <div class="media align-self-center">
                                <img class="align-self-center" src="http://localhost/viho/theme/public/assets/images/blog/comment.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#">
                                                <strong class="mt-0">{{$comment->user->name}}<span> ( {{$comment->user->email}} - {{$comment->user->nomor_telpon}} )</span></strong>
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="comment-social">
                                                <li>{{$comment->created_at}}</li>
                                                <li>{{$comment->publish}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>{{ $comment->isi_komentar}}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">

    <form method="POST" action="{{ route_from($commentURL,$RECORD)}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            @if (Session::has('response.message'))
                <x-viho::alert id="alert_notif" class="alert-info">
                    @foreach (Session::get('response') as $item)
                        {{ $item }}
                    @endforeach
                </x-viho::alert>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <div>
                        <textarea name="isi_komentar" id="isi_komentar" placeholder="ketik balasan komentar disini" class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                        <input type="hidden" id="type" name="type" value="{{ \App\Models\CommentType::POSTCOMMENT }}" />
                        <input type="hidden" id="publish" name="publish" value="{{ \App\Models\CommentStatus::PUBLISH }}" />
                        <input type="hidden" id="post_id" name="post_id" value="{{ $RECORD->id }}" />
                        <input type="hidden" id="parent_id" name="parent_id" value="" />

                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-primary" type="submit">Kirim Balasan</button>
        </div>
    </form>
</div>

@endsection
