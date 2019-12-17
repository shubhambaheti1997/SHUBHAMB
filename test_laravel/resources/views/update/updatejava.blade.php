@extends('layout/admin_master')

@section('body')


    <form action="updatedatajava">

        {{ csrf_field()}}
        <div class="card">
            <div class="card-header">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
            <div class="card-body">

                <table class="table table-bordered table-dark">

                    <thead>

                    <tr>


                        <div class="form-group col-sm-5">
                            <label for="exampleInputEmail1">Update question</label>
                            <input type="text" value="{{$name}}" class="form-control" name="updatequestion">
                            <input type="hidden" value="{{$name}}" class="form-control" name="question">
                            <label for="exampleInputEmail1">Update option a</label>
                            <input type="text" value="{{$op1}}" class="form-control" name="updateoptiona">

                            <label for="exampleInputEmail1">Update option b</label>
                            <input type="text" value="{{$op2}}" class="form-control" name="updateoptionb">

                            <label for="exampleInputEmail1">Update option c</label>
                            <input type="text" value="{{$op3}}" class="form-control" name="updateoptionc">

                            <label for="exampleInputEmail1">Update option d</label>
                            <input type="text" value="{{$op4}}" class="form-control" name="updateoptiond">

                            <label for="exampleInputEmail1">Update correct answer </label>
                            <input type="text" value="{{$ans}}" class="form-control" name="updateans">

                            <button type="submit" class="btn btn-primary">update</button>

                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    {{--                    @foreach($deb as $deb)--}}

                    <tr>

                        {{--<td><input type="hidden" value="{{ $deb->id }}">{{ $deb->question  }}</td>--}}


                    </tr>

                    </tbody>
                </table>
            </div>
        </div>


        <br><br/><br>
        <button type="submit" class="btn btn-primary">Back</button>


    </form>

    </div>
    </div>
@endsection
