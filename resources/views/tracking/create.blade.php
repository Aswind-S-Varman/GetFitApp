<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Session Details</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('../assets/img/AD WEBSITE.jpg'); }
</style>

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
<h1 class="text-4xl font-bold mb-4">Add New Session Details</h1>
<body>
   <form method = "POST" action ='/tracking'>
       @csrf
    <div class="mb-4">
        <label class="font-bold text-gray-800" for="title">Track ID: </label>
        <input id = 'track_id' name = 'track_id' ></label>
    </div>
    <div class="mb-4">
   <label class="font-bold text-gray-800" for="content">Activity: </label>
        <input id = 'Activity' name = 'Activity' ></input>
    </div>
    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Date: </label>
        <input id = 'Date' name = 'Date' type = 'date'></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Sets/Reps: </label>
        <input id = 'Sets_Reps' name = 'Sets_Reps' ></input>
    </div>

    <div class="mb-4">
    <label class="font-bold text-gray-800" for="content">Duration: </label>
        <input id ='Duration' name ='Duration' ></input>
    </div>

    <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
    <a href="/tracking" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
</form>
  </div>
</body>
</html>