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
        <td scope="col"><label for="civilstatus">Civil Status</label></td>
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
        <td scope="col"><label for="position">Position</label></td>
        <td><select name="position">
          <option value="">
            --Please Select--
            </option>
            <option value="Manager">
            Manager
            </option>
            <option value="Staff">
            Staff
            </option>
          </select></td></td>
      </tr>
      <tr>
        <td scope="col"><label for="derpartment_id">Department</label></td>
        <td><select name="department">
            <option value="">
            --Select ID--
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
            </select>
            <select name="department">
            <option value="">
            -- Select Department--
            </option>
            <option value="Sales">
              Sales
            </option>
            <option value="Marketing">
              Marketing
            </option>
            <option value="Human Resource">
              Human Resource
            </option>
            <option value="Finance and Accounting">
              Finance and Accounting
            </option>
            <option value="Public relations">
              Public relations
            </option>
            <option value="Purchase and Production">
              Purchase and Production
            </option>
            <option value="Warehouse">
              Warehouse
            </option>
          </select></td>
      </tr>
      <tr>

        <td scope="col"><label for="division_id">Division</label></td>
        <td><input id="division_id" type="text" name="division" value="{{ old('division_id') }}"/></td>

        <td scope="col"><label for="division_id">division_ID :: </label></td>

        <td scope="col"><label for="division_id">division :: </label></td>

        <td><select name="division_id">
          <option value="">
            --Select ID--
            </option>
            <option value="1">
            ID 1 -MARKETING
            </option>
            <option value="2">
            ID 2 -MANAGEMENT
            </option>
          <option value="3">
            ID 3 -PURCHASE
            </option>
          </select>
          <select name="division">
          <option value="">
            --Select Division--
            </option>
            <option value="1">
            MARKETING
            </option>
            <option value="2">
            MANAGEMENT
            </option>
          <option value="3">
            PURCHASE
            </option>
          </select>
          </td>
      </tr>
      <tr>
        <td scope="col"><label for="workstatus">Work Status</label></td>
        <td><select name="workstatus">
            <option value="">
            --Please Select--
            </option>
            <option value="Rugular">
            Regular
            </option>
            <option value="Temporary">
            Temporary
            </option>
          </select></td></td>
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