<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    @include ('partials.navbar')
    <div class="container">
        <h1 class="mt-5">Create a New Project</h1>
        <div class="col-lg-8">
            <form method="post" action="/start">
                @csrf
                <div class="form-group">
                    <label for="title">Judul Proyek</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan nama proyek anda">
                </div>
                <div class="form-group">
                    <label for="slug">Slug Proyek</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Masukkan nama proyek anda">
                </div>
                <div class="form-group">
                    <label for="projectCategory">Kategori</label>
                    <select class="form-control" id="projectCategory">
                        <option>Butik</option>
                        <option>Kerajinan</option>
                        <option>Komik</option>
                        <option>Makanan</option>
                        <option>Musik</option>
                        <option>Permainan</option>
                        <option>Teknologi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="projectDescription">Deskripsi Proyek</label>
                    <textarea class="form-control" id="projectDesc" rows="5"
                        placeholder="Masukkan penjelasan tentang proyek anda"></textarea>
                </div>
                <div class="form-group">
                    <label for="projectGoal">Target Dana</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="number" class="form-control" id="projectGoal" placeholder="Masukkan target dana proyek anda">
                    </div>
                </div>
                <div class="form-group">
                    <label for="projectDuration">Masukkan tanggal mulai</label>
                    <input type="date" class="form-control" id="start_date" placeholder="Masukkan tanggal mulai kampanye">
                </div>
                <div class="form-group">
                    <label for="projectDuration">Masukkan tanggal mulai</label>
                    <input type="date" class="form-control" id="end_date" placeholder="Masukkan tanggal berakhir">
                </div>
                <button type="submit" class="btn btn-primary">Mulai Proyek</button>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/start/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>