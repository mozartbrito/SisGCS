<?php include 'template/header.php'; ?>
<?php include 'template/menu.php'; ?>

<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Exemplo formulário</h2>
    </div>
  </header>

  <section class="forms"> 
            <div class="container-fluid">
              

              <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Todos elementos de formulários</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Normal</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Help text</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"><span class="help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Placeholder</label>
                          <div class="col-sm-9">
                            <input type="text" placeholder="placeholder" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Disabled</label>
                          <div class="col-sm-9">
                            <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Checkboxes and radios <br><small class="text-primary">Normal Bootstrap elements</small></label>
                          <div class="col-sm-9">
                            <div>
                              <input id="option" type="checkbox" value="">
                              <label for="option">Option one is this and that—be sure to include why it's great</label>
                            </div>
                            <div>
                              <input id="optionsRadios1" type="radio" checked="" value="option1" name="optionsRadios">
                              <label for="optionsRadios1">Option one is this and that be sure to include why it's great</label>
                            </div>
                            <div>
                              <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                              <label for="optionsRadios2">Option two can be something else and selecting it will deselect option one</label>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Inline checkboxes</label>
                          <div class="col-sm-9">
                            <label class="checkbox-inline">
                              <input id="inlineCheckbox1" type="checkbox" value="option1"> a
                            </label>
                            <label class="checkbox-inline">
                              <input id="inlineCheckbox2" type="checkbox" value="option2"> b
                            </label>
                            <label class="checkbox-inline">
                              <input id="inlineCheckbox3" type="checkbox" value="option3"> c
                            </label>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Checkboxes &amp; radios <br><small class="text-primary">Custom elements</small></label>
                          <div class="col-sm-9">
                            <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Option one</label>
                            </div>
                            <div class="i-checks">
                              <input id="checkboxCustom2" type="checkbox" value="" checked="" class="checkbox-template">
                              <label for="checkboxCustom2">Option two checked</label>
                            </div>
                            <div class="i-checks">
                              <input id="checkboxCustom" type="checkbox" value="" disabled="" checked="" class="checkbox-template">
                              <label for="checkboxCustom">Option three checked and disabled</label>
                            </div>
                            <div class="i-checks">
                              <input id="checkboxCustom3" type="checkbox" value="" disabled="" class="checkbox-template">
                              <label for="checkboxCustom3">Option four disabled</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">Option one</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="radio-template">
                              <label for="radioCustom2">Option two checked</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom3" type="radio" disabled="" checked="" value="option2" class="radio-template">
                              <label for="radioCustom3">Option three checked and disabled</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom4" type="radio" disabled="" name="a" class="radio-template">
                              <label for="radioCustom4">Option four disabled</label>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Select</label>
                          <div class="col-sm-9 select">
                            <select name="account" class="form-control">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                          <div class="col-sm-9 offset-sm-3 select">
                            <select multiple="" class="form-control">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row has-success">
                          <label class="col-sm-3 form-control-label">Input with success</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row has-warning">
                          <label class="col-sm-3 form-control-label">Input with warning</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row has-danger">
                          <label class="col-sm-3 form-control-label">Input with error</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Control sizing</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <input type="text" placeholder=".input-lg" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                              <input type="text" placeholder="Default input" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" placeholder=".input-sm" class="form-control form-control-sm">
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Column sizing</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-md-3">
                                <input type="text" placeholder=".col-md-3" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <input type="text" placeholder=".col-md-4" class="form-control">
                              </div>
                              <div class="col-md-5">
                                <input type="text" placeholder=".col-md-5" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="line"> </div>
                        <div class="row">
                          <label class="col-sm-3 form-control-label">Material Inputs</label>
                          <div class="col-sm-9">
                            <div class="form-group-material">
                              <input id="register-username" type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">User Name</label>
                            </div>
                            <div class="form-group-material">
                              <input id="register-email" type="email" name="registerEmail" required class="input-material">
                              <label for="register-email" class="label-material">Email Address      </label>
                            </div>
                            <div class="form-group-material">
                              <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                              <label for="register-passowrd" class="label-material">password        </label>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Input groups</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-addon">@</span>
                                <input type="text" placeholder="Username" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-addon">$</span>
                                <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-addon">
                                  <input type="checkbox"></span>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-addon">
                                  <input type="checkbox" class="checkbox-template"></span>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-addon">
                                  <input type="radio"></span>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-addon">
                                  <input type="radio" class="radio-template"></span>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Button addons</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <div class="input-group"><span class="input-group-btn">
                                  <button type="button" class="btn btn-primary">Go!</button></span>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control"><span class="input-group-btn">
                                  <button type="button" class="btn btn-primary">Go!</button></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">With dropdowns</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <div class="input-group-btn">
                                <button data-toggle="dropdown" type="button" class="btn btn-white dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>



              <!-- fim formulario -->
            </div>
            </section>
  <!-- Client Section-->
<?php include 'template/footer.php'; ?>

         