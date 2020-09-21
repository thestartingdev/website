<form class="form-group" action="../models/inscripcion_model.php" method="post" id="inscribir_participante">
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
                    placeholder="Te pedimos tu celu asi te unimos al grupo de Whatsapp del taller"
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                  <label for="tallerElegido">¿En cual taller queres participar?</label>
                  <br>
                  <select name="tallerElegido" id="tallerElegido" type="text" class="form-control" required>
                    <option value="Python para NO programadores">Python para NO programadores</option>
                    <option value="Javascript para NO programadores">Javascript para NO programadores</option>
                  </select>
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
                    <label for="conocimientoPrevio">¿Tenes conocimientos de programación u otras tecnologias?</label>
                    <br>
                    <select name="conocimientoPrevio" id="conocimientoPrevio" type="text" class="form-control" required>
                      <option value="Ninguno">Ninguno</option>
                      <option value="Basico">Básico</option>
                      <option value="Intermedio">Intermedio</option>
                      <option value="Avanzado">Avanzado</option>
                      <option value="Soy Tony Stark">Soy Tony Stark</option>
                    </select>
                </p>
                <p>
                    <label for="gustariaAprender">¿Qué te gustaria aprender en un taller?</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Aportanos ideas de que te gustaria que aprendamos en equipo :)"
                      name="gustariaAprender"
                      id="gustariaAprender"
                      required
                    />
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
                    value="INSCRIBIRME"
                   />
                </center>
              </form>