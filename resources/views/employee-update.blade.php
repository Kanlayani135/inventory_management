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
    <center>
    
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
        <td><input type="radio" id="sex" name="sex" value="Male" /> Male</input>  
            <input type="radio" id="sex" name="female" value="Female" /> Female</input>
        
      <tr>
        <td class="field-label"><label for="dob">date of birth :: </label></td>
        <td><input id="dob" type="date" name="dob" value="{{ old('dob')?? $employee->dob }}"/></td>
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
        <td><input type="radio" id="civilstatus" name="civilstatus" value="Single" /> Single</input>  
            <input type="radio" id="civilstatus" name="civilstatus" value="Married" /> Married</input></td>
      </tr>
      <tr>
        <td class="field-label"><label for="position">position :: </label></td>
        <td><input type="radio" id="position" name="position" value="Manager" /> Manager</input>  
            <input type="radio" id="position" name="position" value="Staff" /> Staff</input></td>
      </tr>
      <tr>
      <tr>
        <td class="field-label"><label for="department">department_ID :: </label></td>
        <td><select id="department" name="department">
        @foreach($departments as $department)
                        @if($department->id === $employee->department_id)
                                <option selected value="{{ $department->id }}" {{ ($department->id == old('department'))? ' selected' : '' }} > {{ $department->id }}</option>
                            @else
                                <option value="{{ $department->id }}" {{ ($department->id == old('department'))? ' selected' : '' }} > {{ $department->id }} </option>
                            @endif
                        @endforeach
          </select>
          </td>
        </tr>

      <tr>
      <td class="field-label"><label for="division">division :: </label></td>
        <td><select id=division name="division">
        @foreach($division as $divisions)
                        @if($divisions->id === $employee->division_id)
                                <option selected value="{{ $division->id }}" {{ ($division->id == old('division'))? ' selected' : '' }} > [{{ $division->id }}] {{ $division->division }}</option>
                            @else
                                <option value="{{ $division->id }}" {{ ($division->id == old('division'))? ' selected' : '' }} > [{{ $division->id }}] {{ $division->division }}</option>
                            @endif
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
        <td class="field-label"><label for="hireddate">hireddate :: </label></td>
        <td><input id="hireddate" type="date" name="hireddate" value="{{ old('hireddate')?? $employee->hireddate }}"/></td>
      </tr>
    </table>
    </center>
    <div class="actions-panel">
      <button type="submit"class="btn btn-success">Edit</button>
    </div>
  </form>
</main>
@endsection