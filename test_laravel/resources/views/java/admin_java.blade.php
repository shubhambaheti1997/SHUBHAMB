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
           <center> <h4>   Add Question for java</h4></center>
        </div>
        <div class="card-body">
            <div class="container ">
                <div class="row">
                    <div class="col-8">
                        <form action="addjava" method="post">

                            {{ csrf_field()}}


                            <div class="form-group">
                                <label for="formGroupExampleInput">Enter Question</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="question">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option a</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="a">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option b</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="b">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option c</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="c">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter Option d</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="d">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Enter correct answer</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="ans">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="showjava" role="button">Show Question</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
