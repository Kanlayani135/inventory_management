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
        <td class="field-label"><label for="derpartment_id">department :: </label></td>
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
<<<<<<< HEAD
<<<<<<< HEAD
        <td class="field-label"><label for="division_id">division :: </label></td>
        <td><input id="division_id" type="text" name="division" value="{{ old('division_id') }}"/></td>
=======
        <td class="field-label"><label for="division_id">division_ID :: </label></td>
=======
        <td class="field-label"><label for="division_id">division :: </label></td>
>>>>>>> be2d08c8c8072f6465377beadaccadfc8b75cc94
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
<<<<<<< HEAD
          </select></td>
>>>>>>> 0caf8a46c581444f9519dc35edf26c6448a468bd
=======
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
>>>>>>> be2d08c8c8072f6465377beadaccadfc8b75cc94
      </tr>
      <tr>
        <td class="field-label"><label for="workstatus">workstatus :: </label></td>
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
        <td class="field-label"><label for="number">hireddate :: </label></td>
        <td><input id="hireddate" type="date" name="hireddate" value="{{ old('hireddate') }}"/></td>
      </tr>
    </table>
    <div class="actions-panel">
      <button type="submit"class="btn btn-success">Create</button>
    </div>
  </form>
</main>
@endsection