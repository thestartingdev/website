<form class="form-group" action="../models/contact_model.php" method="post" id="aportar_idea">
                <p>
                  <label for="nombreApellido">Nombre y Apellido</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu nombre y apellido"
                    name="nombreApellido"
                    id="nombreApellido"
                    required
                  />
                </p>
                <p>
                  <label for="email">Tu E-mail</label>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Por favor, dejanos tu mail"
                    name="email"
                    id="email"
                    required
                  />
                </p>
                <p>
                  <label for="telefono">Número de telefono</label>
                  <input
                    type="number"
                    class="form-control maskCash"
                    placeholder="Asi te respondemos más rapido"
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                    <textarea id="mensaje" name="mensaje" placeholder="¡Dejanos tu comentario aca!" style="width: 100%; height: 200px;" required></textarea>
                  </p>
                <center>
                  <input
                    type="submit"
                    class="btn-primary btn-large"
                    value="ENVIAR MENSAJE"
                   />
                </center>
              </form>