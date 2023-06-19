<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Create a New Project</h1>
        <form>
            <div class="form-group">
                <label for="projectName">Project Name</label>
                <input type="text" class="form-control" id="projectName" placeholder="Enter project name">
            </div>
            <div class="form-group">
                <label for="projectCategory">Category</label>
                <select class="form-control" id="projectCategory">
                    <option>Technology</option>
                    <option>Art</option>
                    <option>Music</option>
                    <option>Film</option>
                </select>
            </div>
            <div class="form-group">
                <label for="projectDescription">Description</label>
                <textarea class="form-control" id="projectDescription" rows="5"
                    placeholder="Enter project description"></textarea>
            </div>
            <div class="form-group">
                <label for="projectGoal">Funding Goal</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control" id="projectGoal" placeholder="Enter funding goal">
                </div>
            </div>
            <div class="form-group">
                <label for="projectDuration">Campaign Duration (in days)</label>
                <input type="number" class="form-control" id="projectDuration" placeholder="Enter campaign duration">
            </div>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>