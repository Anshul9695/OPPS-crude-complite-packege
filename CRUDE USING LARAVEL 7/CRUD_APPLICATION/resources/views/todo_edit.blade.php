<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>todo_show</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <a href="todo_show">Back</a><br/>
       <form method="post" action="{{route('todo.update',[$todoArr->id])}}">
        @csrf
           <tr>
               <td>Name:</td>
               <td><input type="text" name="name" value="{{$todoArr->name}}" required></td>
           </tr>
             <tr>
               <td><input type="submit" name="submit"></td>
           </tr>
       </form>
        </div>
    </body>
</html>
