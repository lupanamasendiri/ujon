<div class="jumbotron">
    <h2>Halaman <code><?=$p[0]['pages_desk']?></code></h2>
    <p>
        Setelah melakukan input setting, silahkan lakukan input formulir <a href="<?=$p[0]['pages_url']?>kepalasekolah">Kepala Sekolah</a>
    </p>
</div>
<div class="card translateY10">
    <div class="card-header">
        <h2>Formulir <?=$p[0]['pages_desk']?></h2>
    </div>
    <div class="card-body">
        <form action="" method="post" id="settingForm">
            <div class="group">
                <label for="namasekolah">Nama Sekolah</label>
                <input type="text" name="namasekolah" id="namasekolah" placeholder="Nama Sekolah">
            </div>
            <div class="group">
                <label for="npsnsekolah">NPSN Sekolah</label>
                <input type="text" name="npsnsekolah" id="npsnsekolah" placeholder="NPSN Sekolah">
            </div>
            <div class="group">
                <label for="statussekolah">Status Sekolah</label>
                <select name="statussekolah" id="statussekolah">
                    <option value="">-Pilih-</option>
                    <option value="1">Negeri</option>
                    <option value="2">Swasta</option>
                </select>
            </div>
            <div class="group">
                <label for="hpsekolah">HP Sekolah</label>
                <input type="text" name="hpsekolah" id="hpsekolah" placeholder="HP Sekolah">
            </div>
            <div class="group">
                <label for="emailsekolah">Email Sekolah</label>
                <input type="text" name="emailsekolah" id="emailsekolah" placeholder="Email Sekolah">
            </div>
            <div class="group">
                <label for="alamatsekolah">Alamat Sekolah</label>
                <textarea name="alamatsekolah" id="alamatsekolah" cols="30" rows="10" placeholder="Alamat Sekolah"></textarea>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="group">
            <button class="btn btn-login" id="btn-setting">Simpan</button>
        </div>
    </div>
</div>

<script>
    $('#btn-setting').on('click', function(e){
        var data = $('#settingForm')[0];
        var formData = new FormData(data);
        $.ajax({
            url:'config/',
            type:'post',
            dataType:'JSON',
            data:{data: formData},
            success:function(res){
                alert(res)
            }
        })
    })
</script>