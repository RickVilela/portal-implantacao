
      <!--  Header End -->
      <div class="container-fluid">
      <div class="content">
    
    <div class="container" id="form">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center p-4">Dados do Cliente</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="<?= base_url('')?>implantacao/store">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Código do Cliente *</label>
                  <input type="text" class="form-control" name="cod_cliente" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Razão Social *</label>
                  <input type="text" class="form-control" name="razao" id="email"  placeholder="Your email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Nome do Responsável</label>
                  <input type="text" class="form-control" name="nomeResponsavel" id="subject" placeholder="Your subject">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="status" class="col-form-label">Status *</label>
                  <select class="form-select" name="status" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
<!-- 
              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Descrição *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div> -->

              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="Cadastrar" id="btnCadastrar" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/sidebarmenu.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>
  <script src="<?= base_url('assets/libs/apexcharts/dist/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('assets/libs/simplebar/dist/simplebar.js') ?>"></script>
  <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>