<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    
</head>

<body>
<div class='container'>
    <div class="row mt-5">
        <div class="col-md-5">
            <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="inputIDkomunitas">ID Komunitas</label>
                  <input type="text" name="idkomunitas" class="form-control" id="idkomunitas" aria-describedby="idkom" placeholder="Masukkan ID Komunitas">
                  <small id="idkom" class="form-text text-muted"></small>
                </div>
                
                <div class="form-group">
                    <label for="inputNamaEvent">Nama Event</label>
                    <input type="text" name="nameevent" class="form-control" id="idkomunitas" aria-describedby="namaEvent" placeholder="Masukkan Nama Event Anda">
                    <small id="namaEvent" class="form-text text-muted"></small>
                </div>
                
                <div class="form-group">
                    <label for="inputTanggal">Tanggal</label>
                    <input class="form-control" type="date" name="tgl" value="" id="example-datetime-local-input">
                </div>

                <div class="form-group">
                    <label for="inputWaktu">Waktu</label>
                    <input type="text" name="time" class="form-control" id="waktu" aria-describedby="waktu" placeholder="Waktu Event Berlangsung">
                    <small id="waktu" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" name="tempat" id="tempat" aria-describedby="tempat" placeholder="Tempat Event Berlangsung">
                    <small id="waktu" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Event</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsiEvent" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Poster</label>
                    <input type="text" name="poster" class="form-control" id="uploadPoster">
                </div>

                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </form>
              
        </div>
    </div>
</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>