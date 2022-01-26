<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainee's Session Tracking Details</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/styles.css'); }} rel="stylesheet" />
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('/assets/img/AD WEBSITE.jpg'); }
</style>
<body>
<div style="width: 1000px;" class="container max-w-full mx-auto pt-4">
<h1 class="text-4xl font-bold mb-4">Trainee's Session Tracking Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Track ID</th>
      <th scope="col">Activity</th>
      <th scope="col">Date</th>
      <th scope="col">Sets/Reps</th>
      <th scope="col">Duration</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tracking as $tracking)
        <tr>
            <td> {{$tracking->track_id}} </td>
            <td> {{$tracking->Activity}} </td>
            <td> {{$tracking->Date}} </td>
            <td> {{$tracking->Sets_Reps}} </td>
            <td> {{$tracking->Duration}} </td>
            <td><a href = "/tracking/{{$tracking->id}}/edit_user"><button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button></a></td>
            <form action="/tracking/{{$tracking->id}}" method ="POST">
            @csrf
            @method('DELETE')
           <td><button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button></td>          
            </tr>
            @endforeach
    </tbody>
    </table>
    <hr class="mt-2">
    <a href="{{ url()->previous() }}" class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Go back</a>
  </div>
</body>
</html>