<div class="section-body">
  <h2 class="section-title"></h2>
  <p class="section-lead"></p>
  <div class="card">
    <div class="card-header">
      <h4>Selamat Datang</h4>
    </div>
    <div class="card-body">
      <p><?= print_r($this->session->userdata('email')) ?></p>
      <p><?= print_r($this->session->userdata('name')) ?></p>
      <p><?= print_r($this->session->userdata('role')) ?></p>
    </div>
    <div class="card-footer bg-whitesmoke">
      
    </div>
  </div>
</div>