@extends('layout')
@section('content')

    <div class="container">
        <a name="top"></a>

        <h1>Mijn dashboard</h1>
        <p>Hier staat het jaaroverzicht met daarin de cursussen en de toetsen</p>

        <a href="/dashboard/create/course">voeg een cursus toe</a>
        <div class="table-1">
            <table>
                <tr class="align-left">
                    <th></th>
                    <th></th>
                    <th>Cursus</th>
                    <th>EC</th>
                    <th>Toetsen</th>


                    </th>
                </tr>
                @foreach($course as $course)
                    <tr class="align-left">
                        <td><a href="/dashboard/{{$course->id}}/edit/course">edit</a></td>

                        <td>
                            <form method="POST" action="/dashboard/{{$course->id}}">
                                @csrf
                                @method('DELETE')
                                <button>delete</button>
                            </form>
                        </td>
                        <td>{{$course -> name}}</td>
                        <td>{{$course -> ecs}}</td>

                        <td>
                            <details>
                                <summary>open</summary>

                                <table>

                                    <th>toets</th>
                                    <th>cijfer</th>
                                    <th>weging</th>
                                    <th><a href="/dashboard/create/assignment">create assingment</a></th>
                                    @foreach($course->assignment as $assignment)

                                        <tr>
                                            <td class="td-p">{{$assignment->name}}</td>
                                            <td><p class="td-p">{{$assignment->grade}}</p></td>
                                            <td><p class="td-p">{{$assignment->weight}}</p></td>
                                            <td><p class="td-p"><a href="/dashboard/{{$assignment->id}}/edit">edit
                                                        entry</a></p></td>
                                            {{--                                            <td>--}}
                                            {{--                                                <form method="POST" action="/dashboard/{{$assignment->id}}">--}}
                                            {{--                                                    @csrf--}}
                                            {{--                                                    @method('DELETE')--}}
                                            {{--                                                    <button>delete</button>--}}
                                            {{--                                                </form>--}}
                                            {{--                                            </td>--}}
                                        </tr>


                                    @endforeach
                                </table>
                            </details>
                        </td>


                        @endforeach
                    </tr>
            </table>

        </div>

        <div class=spacer></div>
    </div>

@endsection
