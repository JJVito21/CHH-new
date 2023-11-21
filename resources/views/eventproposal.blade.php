@extends('layout')
@section('content')
@include('navbar')


<div class="container">
    <h1 class="mt-5">this is the event proposal page sample</h1>
</div>

<div class="container">
    <p class="mt-2" style="font-weight:bold;">Got some event ideas for the organization?  </p>
    <form class="row g-3">
<div class="row g-3">
    <div class="col-md-5">
    <label for="members-name" class="form-label">Member's First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
    <div class="col-md-5">
        <label for="members-name" class="form-label">Member's Last Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">

    </div>
</div>

    <div class="row g-2">
        <div class="col-md-4">
            <label for="members-name" class="form-label">Event Idea Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
    </div>

    <div class="row g-2">
        <label class="form-label">Event Description</label>
        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comments</label>
          </div>
    </div>

    <div class="row g-2">
        <div class="col-md-5">
            <label for="members-name" class="form-label">Date of Event</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>

        <div class="col-md-5">
            <label for="members-name" class="form-label">Location</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" >
        </div>

    </div>

    <div class="col-1">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    
      <div class="col-1">
        <button type="submit" class="btn btn-primary">Cancel</button>
      </div>
</form>
</div>
@endsection 