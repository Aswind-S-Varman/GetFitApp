<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Session Details</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('/assets/img/AD WEBSITE.jpg'); }
</style>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <h1 class="text-4xl font-bold mb-4">Edit Your Session Details</h1>
    <form method = "POST" action = '/tracking/{{$tracking->id}}/show'>
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Track ID: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="track_id" name="track_id" value='{{$tracking->track_id}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Activity: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Activity" name="Activity" value='{{$tracking->Activity}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Date: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Date" name="Date" value='{{$tracking->Date}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Sets/Reps: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Sets_Reps" name="Sets_Reps" value='{{$tracking->Sets_Reps}}'></input>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Duration: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Duration" name="Duration" value='{{$tracking->Duration}}'></input>
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="{{url()->previous()}}"class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            </form>
        </form>
    </div>
</body>
</html>