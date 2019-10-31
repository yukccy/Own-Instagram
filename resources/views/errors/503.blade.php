@extends('errors::minimal')

@section('title', __('Yuk Chan | Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))

