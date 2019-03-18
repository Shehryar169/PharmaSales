@extends('layouts.admin')

@section('content')
<h1>Medical Stores</h1>
<h1>Employees</h1>
<div class="container-fluid">
    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Default</td>
            <td>Defaultson</td>
            <td>def@somemail.com</td>
        </tr>
        <tr class="success">
            <td>Success</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr class="danger">
            <td>Danger</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr class="info">
            <td>Info</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr class="warning">
            <td>Warning</td>
            <td>Refs</td>
            <td>bo@example.com</td>
        </tr>
        <tr class="active">
            <td>Active</td>
            <td>Activeson</td>
            <td>act@example.com</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
