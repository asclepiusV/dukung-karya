@include('partials.navbar')

<div class="container mb-5">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-5">Buat Ide Proyek Anda</h1>
                    <form method="post" action="/" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Proyek</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan nama proyek Anda">
                        </div>
                        <div class="form-group">
                            <label for="projectCategory">Kategori</label>
                            <select class="form-control" id="projectCategory" name="projectCategory">
                                <option value="1">Butik</option>
                                <option value="2">Kerajinan</option>
                                <option value="3">Komik</option>
                                <option value="4">Makanan</option>
                                <option value="5">Musik</option>
                                <option value="6">Permainan</option>
                                <option value="7">Teknologi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formFile">Gambar Proyek</label>
                            <input class="form-control-file" type="file" id="formFile" name="image">
                        </div>
                        <div class="form-group">
                            <label for="projectDescription">Deskripsi Proyek</label>
                            <textarea class="form-control" id="projectDesc" rows="5" name="projectDesc" placeholder="Masukkan penjelasan tentang proyek Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="projectGoal">Target Dana</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="number" class="form-control" id="projectGoal" name="projectGoal" placeholder="Masukkan target dana proyek Anda">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="projectDuration">Durasi Kampanye (dalam hari)</label>
                            <input type="number" class="form-control" id="duration" name="duration" placeholder="Masukkan durasi kampanye">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Mulai Proyek</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
