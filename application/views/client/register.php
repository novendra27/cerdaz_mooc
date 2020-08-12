<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row ">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form method="post" action="<?= base_url('C_auth/register') ?>" class="user">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Username" value="<?= set_value('username') ?>">
                  <small class="text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nama_depan" id="exampleFirstName" placeholder="First Name" value="<?= set_value('nama_depan') ?>">
                    <small class="text-danger"><?= form_error('nama_depan'); ?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="nama_belakang" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" value="<?= set_value('nama_belakang') ?>">
                    <small class="text-danger"><?= form_error('nama_belakang'); ?></small>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address" value="<?= set_value('email') ?>">
                  <small class="text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password2" class="form-control form-control-user" id="exampleInputPassword" placeholder="Repeat Password">
                    <small class="text-danger"><?= form_error('password2'); ?></small>
                  </div>
                </div>
                <div class="form-group">
                  <select name="user_role" id="role" class="custom-select">
                    <option value="1">Pengajar</option>
                    <option value="2">Pelajar</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block mb-5">Register</button>
              </form>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('login'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>