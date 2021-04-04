@extends('layouts.app')

@section('title', $title)

@section('content')
<main>
  @csrf
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('employee-list') }}">Back</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee Update</li>
        </ol>
      </nav>
<form action="{{ route('employee-update', ['employee' => $employee->code,]) }}" method="post">
    @csrf
    <table class="centered">
      <tr>
        <td class="field-label"><label for="code">Code :: </label></td>
        <td><input id="code" type="text" name="code" value="{{ old('code')?? $employee->code }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="fname">fname :: </label></td>
        <td><input id="fname" type="text" name="fname" value="{{ old('fname')?? $employee->fname }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="lname">lname :: </label></td>
        <td><input id="lname" type="text" name="lname" value="{{ old('lname')?? $employee->lname }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="address">address :: </label></td>
        <td><textarea id="address" name="address" cols="40" rows="5">{{ old('address')?? $employee->address }}</textarea></td>
      </tr>
      <tr>
        <td class="field-label"><label for="sex">sex :: </label></td>
        <td> <select name="sex">
        @foreach($sex as $sex)
            <option value="{{ $sex->{{ $employee->sex }}" {{ ($male->sex == old('male'))? ' selected' : '' }}>
              {{  old('sex')?? $employee->sex }} }}
            </option>
            @endforeach
          
          </select></td>
        <td><input id="sex" type="text" name="sex" value="{{ old('sex')?? $employee->sex }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="dob">date of birth :: </label></td>
        <td><input id="dob" type="text" name="dob" value="{{ old('dob')?? $employee->dob }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="age">age :: </label></td>
        <td><input id="age" type="text" name="age" value="{{ old('age')?? $employee->age }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="tel">telephone :: </label></td>
        <td><input id="tel" type="text" name="tel" value="{{ old('tel')?? $employee->tel }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="civilstatus">civilstatus :: </label></td>
        <td><input id="civilstatus" name="civilstatus" value="{{ old('civilstatus')?? $employee->civilstatus }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="position">position :: </label></td>
        <td><input id="position" type="text" name="position" value="{{ old('position')?? $employee->position }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="department_id">department_ID :: </label></td>
        <td><input id="department_id" type="text" name="department_id" value="{{ old('department_id')?? $employee->department_id }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="department">department :: </label></td>
        <td><input id="department" type="text" name="department" value="{{ old('department')?? $employee->department }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="division_id">division_ID :: </label></td>
        <td><input id="division_id" type="text" name="division_id" value="{{ old('division_id')?? $employee->division_id }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="division_id">division :: </label></td>
        <td><input id="division" type="text" name="division" value="{{ old('division_id')?? $employee->division }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="workstatus">workstatus :: </label></td>
        <td><input id="workstatus" type="text" name="workstatus" value="{{ old('workstatus')?? $employee->workstatus }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="hireddate">hireddate :: </label></td>
        <td><input id="hireddate" type="date" name="hireddate" value="{{ old('hireddate')?? $employee->hireddate }}"/></td>
      </tr>
    </table>
    <div class="actions-panel">
      <button type="submit"class="btn btn-success">Edit</button>
    </div>
  </form>
</main>
@endsection