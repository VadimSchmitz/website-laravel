@extends('layout')
@section('content')

    <div class="container">
        <a name="top"></a>

        <h1>Mijn dashboard</h1>
        <p>Hier staat het jaaroverzicht met daarin de cursussen en de toetsen</p>

        <div class="table-1">


            <table>
                <tr class="align-left">
                    <th>cursus</th>
                    <th>ec</th>
                </tr>


                    <tr class="align-left">
                        <form method="POST" action="/dashboard/{{$course->id}}/edit/course">


                            @csrf
                            @method('PUT')
                            <td><input name="name" id="name" value='{{$course->name}}'></td>
                            <td><input name="weight" id="weight" value='{{$course->ecs}}'></td>



                            <button class="button is-link" type="submit">Submit</button>
                        </form>

                    </tr>
            </table>

            <br>

        </div>




@endsection
