<?php include 'template/header.php'; ?>

<div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content" align="center">
                  <div class="logo">
                  	<img src="img/LOGO.png" width="200"  style="background: #fff; border-radius: 10%;">
                    <!-- <h1>SisGCS</h1> -->
                  </div>
                  <p>&nbsp;</p>
                  <p>Sistema de Gerenciamento e Controle de Salão - SENAC</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required="" class="input-material">
                      <label for="login-username" class="label-material">Usuário</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                      <label for="login-password" class="label-material">Senha</label>
                    </div><a id="login" href="index.php" class="btn btn-primary">Entrar</a>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>SENAC - <a href="#" class="external"> Os Sobreviventes 2017</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>