<form class="form-group" action="../models/voluntarios_model.php" method="post" id="sumar_voluntario">
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
                  <label for="edad">Edad</label>
                  <input
                    type="number"
                    max="99"
                    class="form-control"
                    placeholder="Ingresa tu edad, por favor."
                    name="edad"
                    id="edad"
                    required
                  />
                </p>
                <p>
                  <label for="dni">DNI</label>
                  <input
                    type="number"
                    class="form-control"
                    placeholder="Ingresa tu número de documento, por favor."
                    name="dni"
                    id="dni"
                    required
                  />
                </p>
                <p>
                  <label for="email">Tu E-mail</label>
                  <input
                    type="email"
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
                    type="number"
                    class="form-control maskCash"
                    placeholder="Asi nos ponemos en contacto con vos."
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                    <label for="comoNosConociste">¿Como nos conociste?</label>
                    <br>
                    <select name="comoNosConociste" id="comoNosConociste" type="text" class="form-control" required>
                      <option value="Linkedin">Linkedin</option>
                      <option value="Instagram">Instagram</option>
                      <option value="Twitter">Twitter</option>
                      <option value="Youtube">Youtube</option>
                      <option value="Github">Github</option>
                      <option value="Otro">Otro</option>
                    </select>
                </p>
                <p>
                  <textarea id="aportar" name="aportar" placeholder="¡Contanos que queres aportar!" style="width: 100%; height: 200px;" required></textarea>
                </p>
                <p>
                  <label for="comentario">¿Queres sumar algun comentario?</label>
                  <input
                    type="text"
                    class="form-control maskAge"
                    placeholder="Contamos de forma muy cortita porque te interesa participar en los talleres."
                    name="comentario"
                    id="comentario"
                    required
                  />
                </p>
                <center>
                  <input
                    type="submit"
                    class="btn-primary btn-large"
                    value="SER VOLUNTARIO"
                   />
                </center>
              </form>