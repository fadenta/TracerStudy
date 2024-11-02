<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Input Data Admin</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Form Input Data Admin</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body" style="max-height: 75vh; overflow-y: auto;">
                    <form action="index.php?page=data_admin_insert" method="post">
                        <!-- Admin ID -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>ID Admin</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id_admin" placeholder="Masukkan ID Admin" required>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Username</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Password</b></label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                            </div>
                        </div>

                        <!-- Submit and Reset Buttons -->
                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
                                <button type="reset" class="btn btn-dark">Reset</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
