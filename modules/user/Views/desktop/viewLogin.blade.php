@extends('layout/desktop-frontend-none')

@push('scripts')
    <script src="{{ asset('js/user/login.js?=').time() }}"></script>
@endpush

@section('content')
    @include('user::components.frontend.form-login')
@endsection