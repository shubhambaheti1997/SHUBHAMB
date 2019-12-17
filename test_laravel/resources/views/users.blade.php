@extends('layout/admin_master')

@section('body')





    <div class="card">
        <div class="card-header">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h3>Registered users</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-dark">

                <thead>
                {{-- <col width="80">
                 <col width="200">
                 <col width="80">--}}
                <tr>


                    <th>Username</th>
                    <th>Email</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($deb as $deb)
                    {{ csrf_field()}}
                    <tr>

                        {{--<td><input type="hidden" value="{{ $deb->id }}">{{ $deb->question  }}</td>--}}
                        <td>{{ $deb->username }}</td>
                        <td>{{ $deb->email }}</td>
                        <!-- {{--<td>   <a class="btn btn-danger" href='deletepython/{{ $deb->question }}' role="button">Delete</a></td>--}} -->
                        <td>
                            <a class="btn btn-danger" href='deleteusers/{{ $deb->username }}' role="button">Delete</a>


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
