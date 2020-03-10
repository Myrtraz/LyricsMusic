@extends('layouts.app')
@section('title','LyricsMusix - Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">
                    <span class="float-right"><i class="fas fa-exit"></i></span>
                    <span class="text-success">Be successfully accessed user</span>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Welcome, {{$user->name}}. <br><br>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <div class="card">
                    <div class="card-header">
                        Music
                    </div>
                    <div class="card-body" style="background-color:;">
                        <div class="col-4">
                            <div class="card">
                                <img src="https://m.media-amazon.com/images/I/91uEaf-TFjL._SS500_.jpg" alt="..." class="card-img-top">
                            </div>
                            <div class="card-title">
                                <h1 class="text-center ">El libro de las sombras</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        function removeElement(notificationId) {
        // Removes an element from the document
        var notification = document.getElementById(notificationId);
        notification.parentNode.removeChild(notification);
        }
        </script>
        @endsection