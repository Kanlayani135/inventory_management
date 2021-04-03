@extends('layouts.app')

@section('title',$title)

@section('content')
    <!-- On rows -->
<tr class="table-active">...</tr>

<tr class="table-light">ID</tr>
<tr class="table-success">622110135</tr>
<tr class="table-danger">622110177</tr>
<tr class="table-warning">622110204</tr>


<!-- On cells (`td` or `th`) -->
<tr>
  <td class="table-active">Name</td>
  
  <tr class="table-light">...</tr>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
 
</tr>
@endsection