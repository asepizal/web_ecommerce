<main role="main" class="container ">
    <?php $this->load->view('templates/_alert') ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 mx auto">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="<?= base_url('register') ?>" method="post">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" required autofocus name="name">
                  <?= form_error('name') ?>  
                </div>
                <div class="form-group">
                  <label for="">E-mail</label>
                  <input type="email" class="form-control" required name="email">
                  <?= form_error('email') ?>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" required name="password">
                  <?= form_error('password') ?>
                </div>
                <div class="form-group">
                  <label for="">Konfirmasi Password</label>
                  <input type="password" class="form-control" required name="password_confirmation">
                  <?= form_error('password_confirmation') ?>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>