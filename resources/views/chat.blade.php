<!-- resources/views/chat.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Online Users</div>

                <div class="card-body scroll-body">
                    <online-list :users="users"></online-list>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Chat</div>

                <div class="card-body scroll-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                
                <div class="card-footer">
                    <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
