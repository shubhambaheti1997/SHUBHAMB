@extends('layout/admin_master')

@section('body')





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
                   {{-- <col width="80">
                    <col width="200">
                    <col width="80">--}}
                    <tr>


                        <th>Question</th>
                        <th>Answer</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($deb as $deb)
                        {{ csrf_field()}}
                        <tr>

                            <td><input type="hidden" value="{{ $deb->id }}">{{ $deb->question  }}</td>
                            <td>{{ $deb->ans }}</td>
                            <td>   <a class="btn btn-danger" href='deletepython/{{ $deb->question }}' role="button">Delete</a></td>
                            <td>
                                <form action="updatepython" method="get">

                                    <input type="hidden" value="{{ $deb->question}}" name="question">
                                    <input type="hidden" value="{{ $deb->op1}}" name="optiona">
                                    <input type="hidden" value="{{ $deb->op2}}" name="optionb">
                                    <input type="hidden" value="{{ $deb->op3}}" name="optionc">
                                    <input type="hidden" value="{{ $deb->op4}}" name="optiond">
                                    <input type="hidden" value="{{ $deb->ans}}" name="corrans">

                                    <button type="submit" class="btn btn-primary">edit</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>




        <br><br/><br>
        <form action="python" method="get">
            <button type="submit" class="btn btn-primary">Back</button>
            {{----}} {{----}}
        </form>
        {{--<button type="submit" class="btn btn-primary">Back</button>--}}





    </div>
    </div>
@endsection
