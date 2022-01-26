<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Details</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('/assets/img/AD WEBSITE.jpg'); }
</style>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <h1 class="text-4xl font-bold mb-4">Edit Trainee's Profile Details</h1>
    <form method = "POST" action = '/profiles/{{$profile->id}}'>
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Profile ID: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="profile_id" name="profile_id" value='{{$profile->profile_id}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Gender: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Gender" name="Gender" value='{{$profile->Gender}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Weight: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Weight" name="Weight" value='{{$profile->Weight}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Height: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Height" name="Height" value='{{$profile->Height}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Muscle Focus: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Muscle_Focus" name="Muscle_Focus" value='{{$profile->Muscle_Focus}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Health Problem: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Health_Problem" name="Health_Problem" value='{{$profile->Health_Problem}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Purpose: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Purpose" name="Purpose" value='{{$profile->Purpose}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Location: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Location" name="Location" value='{{$profile->Location}}'></input>
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/profiles" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>

            <!-- <form action="/profiles/{{$profile->id}}">
                @csrf
                @method('DELETE')

                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button> -->
            </form>
        </form>
    </div>
</body>
</html>