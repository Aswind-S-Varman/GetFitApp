<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainee's Profile Details</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/styles.css'); }} rel="stylesheet" />
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('/assets/img/AD WEBSITE.jpg'); }
</style>
<body>
<div style="width: 1000px;" class="container max-w-full mx-auto pt-4">
<h1 class="text-4xl font-bold mb-4">Trainee's Profile Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Profile ID</th>
      <th scope="col">Gender</th>
      <th scope="col">Weight</th>
      <th scope="col">Height</th>
      <th scope="col">Muscle Focus</th>
      <th scope="col">Health Problem</th>
      <th scope="col">Purpose</th>
      <th scope="col">Location</th>
  
    </tr>
  </thead>
  <tbody>
    @foreach($profile as $profile)
        <tr>
            <td> {{$profile->profile_id}} </td>
            <td> {{$profile->Gender}} </td>
            <td> {{$profile->Weight}} </td>
            <td> {{$profile->Height}} </td>
            <td> {{$profile->Muscle_Focus}} </td>
            <td> {{$profile->Health_Problem}} </td>
            <td> {{$profile->Purpose}} </td>
            <td> {{$profile->Location}} </td>
            <td><a href = "/profiles/{{$profile->id}}/edit_user"><button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button></a></td>
                        
            <form action="/profiles/{{$profile->id}}" method ="POST">
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