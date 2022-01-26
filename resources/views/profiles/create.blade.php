<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Trainee Profile</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('../assets/img/AD WEBSITE.jpg'); }
</style>

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
<h1 class="text-4xl font-bold mb-4">Add New Trainee's Profile Details</h1>
<body>
   <form method = "POST" action ='/profiles'>
       @csrf
    <div class="mb-4">
        <label class="font-bold text-gray-800" for="title">Profile ID: </label>
        <input id = 'profile_id' name = 'profile_id' ></label>
    </div>
    <div class="mb-4">
   <label class="font-bold text-gray-800" for="content">Gender: </label>
        <input id = 'Gender' name = 'Gender' ></input>
    </div>
    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Weight: </label>
        <input id = 'Weight' name = 'Weight' ></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Height: </label>
        <input id = 'Height' name = 'Height' ></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Muscle Focus: </label>
        <input id = 'Muscle_Focus' name = 'Muscle_Focus' ></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Health Problem: </label>
        <input id = 'Health_Problem' name = 'Health_Problem' ></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Purpose: </label>
        <input id = 'Purpose' name = 'Purpose' ></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Location: </label>
        <input id = 'Location' name = 'Location' ></input>
    </div>

    <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
    <a href="/profiles" class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
</form>
  </div>
</body>
</html>