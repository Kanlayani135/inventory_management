@extends('layouts.app')

@section('title', $title)

@section('content')
<main>
  <form action="{{ route('employee-create') }}" method="post">
    @csrf
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
        <td><input type="radio" id="sex" name="sex" value="Male" /> Male</input>  
            <input type="radio" id="sex" name="sex" value="Female" /> Female</input></td>
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
        <td><input type="radio" id="civilstatus" name="civilstatus" value="Single" /> Single</input>  
            <input type="radio" id="civilstatus" name="civilstatus" value="Married" /> Married</input>
        </td>
      </tr>
      <tr>
        <td class="field-label"><label for="position">position :: </label></td>
        <td><input type="radio" id="position" name="position" value="Manager" /> Manager</input>  
            <input type="radio" id="position" name="position" value="Staff" /> Staff</input>
            </td></td>
      </tr>
      <tr>
        <td class="field-label"><label for="derpartment">department :: </label></td>
        <td><select id=department name="department">
            @foreach($departments as $department)
            <option value="{{ $department->id }}" {{ ($department->id == old('department'))? ' selected' : '' }}>
              [{{$department->id}}] - {{ $department->department }}
            </option>
            @endforeach
          </select>
          </td>
        </tr>
        
        <tr>
        <td class="field-label"><label for="division">division :: </label></td>
        <td><select name="division">
        @foreach($divisions as $division)
            <option value="{{ $division->id }}" {{ ($division->id == old('division'))? ' selected' : '' }}>
              [{{$division->id}}] - {{ $division->division }}
            </option>
            @endforeach
          </select>
          </td>
      </tr>
      <tr>
        <td class="field-label"><label for="workstatus">workstatus :: </label></td>
        <td><input type="radio" id="workstatus" name="workstatus" value="Regular" /> Regular</input>  
            <input type="radio" id="workstatus" name="workstatus" value="Temporary" /> Temporary</input>
            </td></td>
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