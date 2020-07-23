@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Report</h1>
</div>
</div>

<div class="row">
    <div class="col">
    <a class="btn btn-secondary" href="/expense_reports/create">Back</a>

    </div>
</div>
<div class="row">
    <div class="col">
      <form action="/expense_reports" method="post">
        @crsf
        <div class="form-group">
            <label class="title"></label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type a title">
        </div>
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    </div>
</div>
@endsection