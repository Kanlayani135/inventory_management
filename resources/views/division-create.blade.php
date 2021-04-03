@extends('layouts.app')
@section('title',$title)

@section('content')
<form action="{{ route('division-create') }}" method="post">
@csrf
    <main>
        <table class="table table-striped" style="width: 600px;">
          
            <thead>
            </thead>
            <tbody>
            <td scope="col" for="division_id">Division_id</td>
                <td scope="col"><textarea id="division_id" name="division_id" ></textarea></td>
                <tr>
                <td scope="col" for="division">Division</td>
                <td scope="col"><textarea id="division" name="division" ></textarea></td>
                </tr>
                <tr>
                <td scope="col" for="division_head">Division Head</td>
                <td scope="col"><textarea id="division_head" name="division_head" ></textarea></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Add Submit</i></button>
    </form>
    </main>
@endsection