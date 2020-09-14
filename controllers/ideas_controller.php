<form class="form-group" action="../models/ideas_model.php" method="post" id="aportar_idea">
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
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu E-mail por favor(no somos spamners!)."
                    name="email"
                    id="email"
                    required
                  />
                </p>
                <p>
                  <label for="telefono">Número de telefono</label>
                  <input
                    type="text"
                    class="form-control maskCash"
                    placeholder="Te pedimos tu celu asi te unimos al grupo de Whatsapp del taller"
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                <textarea id="idea" name="idea" placeholder="¿Cual es tu idea?, ¡contanos!" style="width: 100%; height: 200px;" required></textarea>

                  </p>
                <center>
                  <input
                    type="submit"
                    class="btn-primary btn-large"
                    value="SUBIR IDEA"
                   />
                </center>
              </form>