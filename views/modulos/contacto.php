<style>
        .titulo-envianos{
            margin-top: 10px;
            margin-left: 100px;
        }
        @media (max-width: 480px) {
            .titulo-envianos{
                margin-top: 10px;
                margin-left: 20px;
            }
        }
        
    </style>
    <section class="contactos p-5" style=" z-index:2;">
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-8 py-md-5 texto2" style="background-color: #FEF3E4; border-top-left-radius:18px; border-bottom-left-radius:18px">
                    <h4 class="text-left titulo-envianos">ENVÍANOS UN MENSAJE</h4><br>
                    <form action="controller/mailcontacto.php" method="post">
                        <div class="row pt-5 justify-content-center">
                            <div class="col-lg-5">
                                <div class="formulario__grupo-input" style="margin-bottom: 90px;">
                                    <input required type="text" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$" class="form-control inp" id="nombres" name="nombres" placeholder="Nombres y Apellidos"  style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white; color:black;"/>
                                    <p id="obligatorio-message" style="color: red; display: none;">*Este campo es obligatorio</p>
                                    <p id="incorrecto-message" style="color: red; display: none;">*Este campo solo debe contener letras</p>
                                </div>
                            </div>
                            <div class="col-lg-5" style="margin-bottom: 90px;">
                                <input required type="email" class="form-control inp" id="email" name="email" placeholder="Email" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white; color:white;"/>
                                <p id="email-validation-message" class="validation-message"></p>
                            </div>
                            <div class="col-lg-5">
                                <div class="input-group flex-nowrap" style="margin-bottom: 90px;">
                                    <input required type="text" class="form-control inp" id="celular" name="celular" pattern="[9][0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="9" minlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Célular" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;color:white;">
                                </div>
                                <p id="obligatorio-message-cel" style="color: red; display: none;">*Este campo es obligatorio</p>
                                <p id="incorrecto-message-cel" style="color: red; display: none;">*Ingrese solo números en este campo</p>
                            </div>
                            <div class="col-lg-5" >
                                <div class="formulario__grupo-input" style="margin-bottom: 90px;">

                                    <input required type="text" class="form-control inp" id="dni" name="dni" pattern="[0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="8" minlength="8" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="DNI" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;color:white;">
                                </div>
                                <p id="obligatorio-mesage-tel" style="color: red; display: none;">*Este campo es obligatorio</p>
                                <p id="incorrecto-message-tel" style="color: red; display: none;">*Ingrese solo números en este campo</p>
                            </div>
                            <div class="col-lg-5" style="margin-bottom: 90px;">
                                <select required class="form-control inp" id="tipoSeguro" name="tipoSeguro" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;">
                                    <option disabled selected>Seguro que desea cotizar:</option>
                                    <option>Seguro de salud</option>
                                    <option>Seguros de EPS para empresas y persona natural con negocio </option>
                                    <option>Seguro Contra Accidentes</option>
                                    <option>Seguro Oncológico</option>
                                    <option>Seguro de Ahorro</option>
                                    <option>Seguro de Vida a Corto Plazo</option>
                                    <option>Seguro de Vida Largo Plazo</option>
                                    <option>Seguro Académico</option>
                                    <option>Seguro Vehicular</option>
                                    <option>Seguro de viajes</option>
                                    <option>Seguro de Hogar</option>
                                    <option>Seguro SOAT</option>
                                    <option>SCTR</option>
                                    <option>EPS</option>
                                    <option>Vida Ley</option>
                                    <option>Aviación</option>
                                    <option>Transporte</option>
                                    <option>Incendio</option>
                                    <option>CAR</option>
                                    <option>Rotura de Maquinaria</option>
                                    <option>Responsabilidad Civil</option>
                                    <option>Cascos Marítimos</option>
                                    <option>Lucro Cesante</option>
                                    <option>Multirriesgo</option>
                                    <option>TREC</option>
                                    <option>Robo y Asalto</option>
                                    <option>Caución / Crédito</option>
                                    <option>Seguro 3D</option>
                                    <option>EAR</option>
                                    <option>Equipo electrónico</option>
                                </select>

                            </div>

                            <div class="col-md-8">
                                <label class="pt-3">Mensaje</label>
                                <textarea required class="form-control" rows="3" id="mensajePersona" name="mensajePersona"  style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white; color:white;"></textarea>
                                <br>
                            </div>

                            <div class="col-lg-12 text-center mb-4 mt-3">
                                <span class="help-block">
                                    <input required class="btn btn-warning btn-lg marginlastmin justify-content-center" type="submit" name="submit" value="Enviar" />
                                    <span class="spinner-border text-success spinner-border-sm" id="spinnerPersona" role="status" aria-hidden="true" style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;">
                                    </span>
                                </span>
                            </div>
                        </div> <!-- /row -->
                    </form>
                </div>
            </div>
        </div>
    </section>
