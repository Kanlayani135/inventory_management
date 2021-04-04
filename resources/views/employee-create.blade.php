@extends('layouts.app')

@section('title', $title)

@section('content')
<main>
  <form action="{{ route('employee-create') }}" method="post">
    @csrf
    <table class="centered">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('employee-list') }}">Back</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee Create</li>
        </ol>
      </nav>
      <center>
    <table class="table table-striped" style="width: 1200px;">
      <tr>
        <td scope="col"><label for="code">Code</label></td>
        <td><input id="code" type="text" name="code" value="{{ old('code') }}"/></td>
      </tr>
      <tr>
        <td scope="col"><label for="fname">First Name</label></td>
        <td><input id="fname" type="text" name="fname" value="{{ old('fname') }}"/></td>
      </tr>
      <tr>
        <td scope="col"><label for="lnumber">Last Name</label></td>
        <td><input id="lname" type="text" name="lname" value="{{ old('lname') }}"/></td>
      </tr>
      <tr>
        <td scope="col"><label for="address">Address</label></td>
        <td><textarea id="address" name="address" cols="40" rows="5">{{ old('address') }}</textarea></td>
      </tr>
      <tr>
        <td scope="col"><label for="sex">Sex</label></td>
        <td>
        <select name="sex">
        @foreach($males as $male)
            <option value="{{ $male->Male}}" {{ ($male->sex == old('male'))? ' selected' : '' }}>
              Male
            </option>
            @endforeach
            @foreach($females as $female)
            <option value="{{ $female->Female}}" {{ ($female->sex == old('female'))? ' selected' : '' }}>
              Female
            </option>
            @endforeach
          </select>
        </td>
      </tr>
      <tr>
        <td scope="col"><label for="dob">Date of Birth</label></td>
        <td><input id="dob" type="date" name="dob" value="{{ old('dob') }}"/></td>
      </tr>
      <tr>
        <td scope="col"><label for="age">Age</label></td>
        <td><input id="age" type="text" name="age" value="{{ old('age') }}"/></td>
      </tr>
      <tr>
        <td scope="col"><label for="tel">Telephone Number</label></td>
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
        <td class="field-label"><label for="number">Hired Date</label></td>
        <td><input id="hireddate" type="date" name="hireddate" value="{{ old('hireddate') }}"/></td>
      </tr>
    </table>
  </center>
      <button type="submit"class="btn btn-success">Create</button>
  </form>
</main>
@endsection