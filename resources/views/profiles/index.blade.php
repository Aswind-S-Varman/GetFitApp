<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainees' Profile Details</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href={{ URL::asset('css/styles.css'); }} rel="stylesheet" />
    <link href={{ URL::asset('css/main.css'); }} rel="stylesheet" /></head>
    <style>
  body{
    background-image: url('../assets/img/AD WEBSITE.jpg'); }
</style>
<body>
    <div style="width: 1000px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Trainees' Profile Details</h1>

        <a href="redirects" class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Go back</a>
        <a href="/profiles/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Trainee</a>
            <table style = "text-align:center;" class="table">
              <thead>
                <tr>
                  <th scope="col" >Name</th>
                  <th scope="col">Profile_ID</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Height</th>
                  <th scope="col">Muscle Focus</th>
                  <th scope="col">Health Problem</th>
                  <th scope="col">Purpose</th>
                  <th scope="col">Location</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              @foreach($profiles as $profiles)
              <tbody>
                    <tr>
                        <td>{{$profiles->user->name}}</td>
                        <td>{{$profiles->profile_id}}</td>
                        <td>{{$profiles->Gender}} </td>
                        <td>{{$profiles->Weight}}</td>
                        <td>{{$profiles->Height}}</td>
                        <td>{{$profiles->Muscle_Focus}}</td>
                        <td>{{$profiles->Health_Problem}}</td>
                        <td>{{$profiles->Purpose}}</td>
                        <td>{{$profiles->Location}}</td>
                        <td><a href = "/profiles/{{$profiles->id}}/edit"><button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button></a></td>
                        
                        <form action="/profiles/{{$profiles->id}}" method ="POST">
                          @csrf
                          @method('DELETE')
                        <td><button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button></td>
                          </form>
                          @endforeach                    
                      </tr>
                </tbody>
                </table>
                <hr class="mt-2">
           
            
    </div>
    @include('sweetalert::alert')
</body>
</html>