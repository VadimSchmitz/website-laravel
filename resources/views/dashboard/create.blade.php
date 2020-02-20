@extends('layout')
@section('content')

    <div class="container">
        <a name="top"></a>

        <h1>Voeg een cursus toe</h1>
        <p>op deze pagina kan je nieuwe cursussen en resultaten toevoegen</p>

        <div class="table-1">


            <table>
                <tr class="align-left">
                    <th>Cursus</th>
                    <th>EC</th>
                </tr>


                <tr class="align-left">
                    <form method="POST" action="/dashboard">
                        @csrf
                        <td><input name="naam" id="naam"></td>
                        <td><input name="ec" id="ec"></td>
                        <button class="button is-link" type="submit">Submit</button>
                    </form>

                </tr>
            </table>

            <br>

        </div>


@endsection
