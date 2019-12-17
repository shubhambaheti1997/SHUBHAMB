@extends('layout/admin_master')

@section('body')
    <br>
    <div class="card">
        <div class="card-header">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
          <h3>  Enter Question for C</h3>
        </div>
        <div class="card-body">
            <div class="container ">
                <div class="row">
                    <div class="col-8">
                        <form action="addc" method="post">

                            {{ csrf_field()}}


                            <div class="form-group">
                                <label for="formGroupExampleInput">Enter Question</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="question" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option a</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="a" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option b</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="b" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option c</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="c" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option d</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="d" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter correct answer</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="ans" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="showc" role="button">Show Question</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
