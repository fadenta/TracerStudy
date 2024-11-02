<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kirim Pesan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Kirim Pesan E-Mail</li>
              <li class="breadcrumb-item active" aria-current="page">Kirim Pesan</li>
            </ol>
          </div>

    <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Kirim Pesan Email</h1>
                  </div>


        <form method="POST" action="email_php/send.php" enctype="multipart/form-data">
                <div class="form-group">
                <label>Kepada</label><br/>
                <input type="email"  name="email_penerima" style="margin-top: 5px;width: 400px" />
            </div>
                <div class="form-group">
                <label>Subjek</label><br />
                <input type="text" name="subjek" placeholder="Subjek" style="margin-top: 5px;width: 400px" />
            </div>
                <div class="form-group">
                <label>Pesan</label><br />
                <textarea name="pesan" placeholder="Pesan" rows="8" style="margin-top: 5px;width: 400px"></textarea>
            </div>
                <div class="form-group">
                <label>Attachment</label><br />
                <input type="file" name="attachment" style="margin-top: 5px;width: 400px" />
            </div>
            <hr />
            <button type="submit">KIRIM EMAIL</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>