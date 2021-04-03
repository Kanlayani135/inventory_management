@extends('layouts.app')

@section('title', $title)

@section('content')
<main>
  <form action="{{ route('employee-create') }}" method="post">
    @csrf
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('employee-list') }}">Back</a></li>
        </ol>
      </nav>
    <table class="centered">
      <tr>
        <td class="field-label"><label for="code">Code :: </label></td>
        <td><input id="code" type="text" name="code" value="{{ old('code') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="fname">fname :: </label></td>
        <td><input id="fname" type="text" name="fname" value="{{ old('fname') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="lnumber">lname :: </label></td>
        <td><input id="lname" type="text" name="lname" value="{{ old('lname') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="address">address :: </label></td>
        <td><textarea id="address" name="address" cols="40" rows="5">{{ old('address') }}</textarea></td>
      </tr>
      <tr>
        <td class="field-label"><label for="sex">sex :: </label></td>
        <td><select name="sex">
            <option value="">
            --Please Select--
            </option>
            <option value="Male">
              Male
            </option>
            <option value="Female">
              Female
            </option>
          </select></td>
      </tr>
      <tr>
        <td class="field-label"><label for="dob">date of birth :: </label></td>
        <td><input id="dob" type="date" name="dob" value="{{ old('dob') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="age">age :: </label></td>
        <td><input id="age" type="text" name="age" value="{{ old('age') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="tel">telephone :: </label></td>
        <td><input id="tel" type="text" name="tel" value="{{ old('tel') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="civilstatus">civilstatus :: </label></td>
        <td><select name="civilstatus">
            <option value="">
            --Please Select--
            </option>
            <option value="Single">
              Single
            </option>
            <option value="Married">
              Married
            </option>
          </select></td>
      </tr>
      <tr>
        <td class="field-label"><label for="position">position :: </label></td>
        <td><input id="position_id" type="text" name="position" value="{{ old('position') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="derpartment_id">department_ID :: </label></td>
        <td><select name="department_id">
            <option value="">
            --Please Select--
            </option>
            <option value="1">
              ID 1 -Sales
            </option>
            <option value="2">
              ID 2 -Marketing
            </option>
            <option value="3">
              ID 3 -Human Resource
            </option>
            <option value="4">
              ID 4 -Finance and Accounting
            </option>
            <option value="5">
              ID 5 -Public relations
            </option>
            <option value="6">
              ID 6 -Purchase and Production
            </option>
            <option value="7">
              ID 7 -Warehouse
            </option>
          </select></td>
      </tr>
      <tr>
        <td class="field-label"><label for="division_id">division_ID :: </label></td>
        <td><input id="division_id" type="text" name="division_id" value="{{ old('division_id') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="workstatus">workstatus :: </label></td>
        <td><input id="workstatus" type="text" name="workstatus" value="{{ old('workstatus') }}"/></td>
      </tr>
      <tr>
        <td class="field-label"><label for="number">hireddate :: </label></td>
        <td><input id="hireddate" type="date" name="hireddate" value="{{ old('hireddate') }}"/></td>
      </tr>
    </table>
    <div class="actions-panel">
      <button type="submit">Create</button>
    </div>
  </form>
</main>
@endsection