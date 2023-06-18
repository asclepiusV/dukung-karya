<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kickstarter Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
@include ('partials.navbar')
    <div class="container">
        <h1 class="mt-5">Kickstarter Home</h1>
        <div class="row mt-4">
            <?php
      // Dummy project data (replace with actual data from the database)
      $projects = [
        [
          'name' => 'Project 1',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
          'imageUrl' => 'project1.jpg',
        ],
        [
          'name' => 'Project 2',
          'description' => 'Nulla convallis ipsum eget mi efficitur, sit amet luctus lacus pulvinar.',
          'imageUrl' => 'project2.jpg',
        ],
        // Add more project arrays as needed
      ];

      // Generate project cards dynamically
      foreach ($projects as $project) {
        echo '<div class="col-md-4 mb-4">';
        echo '<div class="card">';
        echo '<img src="' . $project['imageUrl'] . '" class="card-img-top" alt="Project Image">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $project['name'] . '</h5>';
        echo '<p class="card-text">' . $project['description'] . '</p>';
        echo '<a href="#" class="btn btn-primary">Support</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>