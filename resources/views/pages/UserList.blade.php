@extends('layouts.home')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Users
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        	<div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usersTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Contact No.</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>