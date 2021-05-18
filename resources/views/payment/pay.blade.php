@extends('layout.app')

@section('css')
<style>
  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  h1 {
    text-align: center;
  }


  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }


  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #04AA6D;
  }
</style>
@endsection

@section('content')
<section>
  <div class="container cards-contact pt-5" id="collapse">
    <div style="height:200px;" class="d-none d-sm-none d-md-block d-lg-block"></div>
    <form id="regForm mx-0" action="/action_page.php">
      <!-- One "tab" for each step in the form: -->
      <div class="tab">
        <h2><b>Verifica tu orden</b></h2>
        <div class="row">
          <div class="col-md-7">
            <div class="card" style="min-height: 380px;">
              <div class="card-body p-lg-4">
                <h4>Elige tu metodo de pago</h4>
                <button class="btn btn-neutral border my-2" style="height: 60px; width:200px">
                  <h2 class="mb-0">PayU</h2>
                </button>
                <button class="btn btn-neutral border my-2" style="height: 60px; width:200px">
                  <h2 class="mb-0">Otro</h2>
                </button>
                <p>Te redireccionaran a la pagina de PayU para proceder con el pago</p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-body p-lg-4">
                <h3 class="text-center font-weight-bold my-4">Resume del pedido</h3>
                <table class="table">
                  <tr>
                    <th>Plan Premium</th>
                    <td class="text-right">$ 40.165</td>
                  </tr>
                  <tr>
                    <th>Código de descuento</th>
                    <td class="text-right"><input type="text" class="form-control input-sm"></td>
                  </tr>
                  <tr>
                    <th>Sub-total</th>
                    <td class="text-right">$ 40.165</td>
                  </tr>
                  <tr>
                    <th>
                      <h4 class="font-weight-bold">Total</h4>
                    </th>
                    <td class="text-right">
                      <h4 class="font-weight-bold">$ 40.165</h4>
                    </td>
                  </tr>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block mt-5" id="nextBtn" onclick="nextPrev(1)">
                  <p class="mb-0 font-weight-bold" style="font-size: 19px;">
                    Pagar
                  </p>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="min-height: 380px;">
              <div class="card-body p-lg-4">
                <div class="row border-bottom py-3">
                  <div class="col-3 my-auto">
                    <h5 class="mb-0">Tarjeta de credito</h5>
                  </div>
                  <div class="col-9 text-left">
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Visa</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Mastercard</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">American Express</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Dinners Club</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Condensa</h6>
                    </button>
                  </div>
                </div>
                <div class="row border-bottom py-3">
                  <div class="col-3 my-auto">
                    <h5 class="mb-0">Banco de Bogota</h5>
                    (Tarjeta de Credito)
                  </div>
                  <div class="col-9 text-left">
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Banco de Bogota</h6>
                    </button>
                    <span> <i class="fa fa-info mr-2 ml-4"></i>Recuerda verifcar el monto maximo que tienes disponible para compras por internet</span>
                  </div>
                </div>
                <div class="row border-bottom py-3">
                  <div class="col-3 my-auto">
                    <h5 class="mb-0">PSE</h5>
                    PSE
                  </div>
                  <div class="col-9 text-left">
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Visa</h6>
                    </button>
                    <span> <i class="fa fa-info mr-2 ml-4"></i>Recuerda verifcar el monto maximo que tienes disponible para compras por internet</span>
                  </div>
                </div>
                <div class="row border-bottom py-3">
                  <div class="col-3 mt-3">
                    <h5 class="mb-0">Pago en efectivo</h5>
                  </div>
                  <div class="col-9 text-left">
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Baloto</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Paga todo/h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Apuestas cucuta</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Gana</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Gana Gana</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">SuChance</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Acertemos</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Laperla</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Apuestas</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Efecty</h6>
                    </button>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-3 my-auto">
                    <h5 class="mb-0">Pago en bancos</h5>
                  </div>
                  <div class="col-9 text-left">
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Banco de Bogota</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Bancolombia</h6>
                    </button>
                    <button class="btn btn-neutral border my-2" style="height: 45px; width:150px">
                      <h6 class="mb-0">Davivienda</h6>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab">
        <h2><b>Estado de la compra</b></h2>
        <div class="row">
          <div class="col-md-7">
            <div class="card" style="min-height: 300px;">
              <div class="card-body p-lg-4 text-center">
                <h4>Pago realizado exitosamente</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52">
                  <path id="Icon_ionic-ios-checkmark-circle" data-name="Icon ionic-ios-checkmark-circle" d="M29.375,3.375a26,26,0,1,0,26,26A26,26,0,0,0,29.375,3.375ZM42.688,22.188,25.975,38.975h-.012a2.257,2.257,0,0,1-1.45.688,2.188,2.188,0,0,1-1.462-.712l-7-7a.5.5,0,0,1,0-.712l2.225-2.225a.483.483,0,0,1,.7,0l5.55,5.55L39.775,19.2a.494.494,0,0,1,.35-.15h0a.454.454,0,0,1,.35.15l2.188,2.262A.493.493,0,0,1,42.688,22.188Z" transform="translate(-3.375 -3.375)" fill="#00dc33"/>
                </svg>
                <h4>¡Gracias por usar adquirir nuestro servicios!</h4>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-body p-lg-4">
                <h3 class="text-center font-weight-bold my-4">Resume del pedido</h3>
                <table class="table">
                  <tr>
                    <th>Plan Premium</th>
                    <td class="text-right">$ 40.165</td>
                  </tr>
                  <tr>
                    <th>Código de descuento</th>
                    <td class="text-right"><input type="text" class="form-control input-sm"></td>
                  </tr>
                  <tr>
                    <th>Sub-total</th>
                    <td class="text-right">$ 40.165</td>
                  </tr>
                  <tr>
                    <th>
                      <h4 class="font-weight-bold">Total</h4>
                    </th>
                    <td class="text-right">
                      <h4 class="font-weight-bold">$ 40.165</h4>
                    </td>
                  </tr>
                </table>
                <div class="row">
                <div class="col-6">
                <button type="button" class="btn btn-neutral border border-primary btn-lg btn-block mt-5 px-0 py-2" style="height: 60px;">
                  <p class="mb-0 font-weight-bold"  style="font-size: 19px; line-height:1;">
                    Descargar Factura
                  </p>
                </button>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-black btn-lg btn-block mt-5" id="nextBtn" onclick="nextPrev(1)" style="height: 60px;">
                  <p class="mb-0 font-weight-bold" style="font-size: 19px;">
                    Finalizar
                  </p>
                </button>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="min-height: 380px;">
              <div class="card-body p-lg-4">
                <h3 class="mb-0 p-5 mb-5 text-center"><b>Documento descargado correctamente</b></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" class="btn btn-lg" style="height: 60px; font-size: 1em;" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" class="btn btn-lg" style="height: 60px; font-size: 1em;" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </form>
  </div>
</section>
@endsection

@section('js')
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
</script>
@endsection