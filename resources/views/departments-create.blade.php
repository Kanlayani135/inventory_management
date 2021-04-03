@extends('layouts.app')

@section('title', $title)

@section('content')

<main>
  <form action="{{ route('departments-create') }}" method="post">
    @csrf
    <table>
      <tr>
        <td class="field-label"><label for="department"> Department :: </label></td>
        <td><input id="department" type="text" name="department" /></td>
      </tr>
      <tr>
        <td class="field-label"><label for="department_head"> Department Head :: </label></td>
        <td><input id="department_head" type="text" name="department_head" /></td>
      </tr>
    </table>
    <div class="actions-panel">
      <button type="submit" class="btn btn-info" >Create</button>
    </div>
  </form>
</main>
@endsection