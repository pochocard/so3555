<!-- TOP / MENU -->
<?php
require "top_menu.php";
?>
        <!-- COTIZADOR -->
        <div class="small-8 small-centered medium-8 medium-centered large-8 large-centered columns">
            <div class="cotizador">
                <h2 class="hide-for-small hide-for-medium">Cotice aquí</h2>
                <p>Tenemos el financiamiento que necesitas, entérate de cómo hacer realidad<br>la compra de tu departamento solicitando una cotización aquí.</p>
                <div class="formulario">
                    <form action="cotizar_mail.php" method="post">
                        <div class="medium-12 large-12 columns">
                            <input type="text" id="name" name="nombre" placeholder="Nombre *" required>
                            <input type="text" id="email" name="email" placeholder="E-mail *" required>
                            <select id="departamento" name="departamento">
                                <option>Tipo de departamento *</option>
                                <option>Departamento A</option>
                                <option>Departamento B</option>
                                <option>Departamento C</option>
                                <option>Departamento D</option>
                                <option>Departamento E</option>
                                <option>Departamento F</option>
                                <option>Departamento G</option>
                                <option>Departamento H</option>
                                <option>Departamento I</option>
                                <option>Departamento J</option>
                                <option>Departamento K</option>
                                <option>Departamento L</option>
                            </select>
                            <input type="text" id="phone" name="telefono" placeholder="Teléfono *" required>
                            <input type="text" id="comments" name="comentarios" placeholder="Comentarios">
                            <div class="center enviar">
                                <input type="submit" name="submit" value="Enviar" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        <!-- BACKGROUND PICTURE -->
        <div class="rslides hide-for-small hide-for-medium">
            <img src="img/slide_cotizar.jpg" alt="SO3555">
        </div>

        <!-- FOOTER -->
        <div class="hide-for-small hide-for-medium">
            <?php
            require "footer.php";
            ?>
        </div>
        