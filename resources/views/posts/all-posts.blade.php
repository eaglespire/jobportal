<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col">
             <h5>All Posts</h5>
             <table class="table">
                 <thead>
                 <tr>
                     <th scope="col">id</th>
                     <th scope="col">Title</th>
                     <th scope="col">Author</th>
                     <th scope="col">Action</th>
                 </tr>
                 </thead>
                 <tbody>
                 @foreach($posts as $post)
                     <p>{{ $post->title }}</p>
                     <p>{{ $post['body']}} {{ $post['id'] }}</p>
                     <p></p>
                 @endforeach
                 @foreach($posts as $blog)
                     <tr>
                         <th scope="row">{{ $blog->id }}</th>
                         <td>{{ $blog->title }}</td>
                         <td>{{ $blog->author }}</td>
                         <td>
                             <a href="{{ route('post.edit',$blog->id) }}" class="btn btn-warning">edit</a>
                         </td>
                     </tr>
                 @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>
</body>
</html>
