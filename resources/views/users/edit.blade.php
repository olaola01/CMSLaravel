<?php
/**
 * Created by PhpStorm.
 * CMSLaravel
 * By: Olamiposi
 * 11/07/2020
 * 2020
 **/
?>
@extends('layouts.app')

@section('content')
                <div class="card">
                    <div class="card-header">{{ __('My profile') }}</div>

                    <div class="card-body">
                        @include('partials.errors')
                    <form action="{{ route('users.update-profile') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="about">About me</label>
                            <textarea name="about" id="about" rows="5" cols="5" class="form-control">{{ $user->about }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Update Profile</button>
                    </form>
                </div>
                </div>

@endsection
