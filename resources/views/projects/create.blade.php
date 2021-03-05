<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Projects</title>
  </head>
  <body>
    <h1>Create a New Project</h1>

    <form action="/projects" method="post">
      <!-- Must-have when parse data in Laravel -->
      {{ csrf_field() }}

      <div>
        <input type="text" name="title" placeholder="Project title">
      </div>

      <textarea name="description" placeholder="Project description"></textarea>

      <div>
        <button type="submit">Create Project</button>
      </div>
    </form>
  </body>
</html>
