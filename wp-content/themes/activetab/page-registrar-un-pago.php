<?php

/**
 * Template Name: Registrar Un Pago
 */

get_header();
get_template_part('template-part', 'wrap-before');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validar datos.
    var_dump($_POST);

}

?>

    Llene el formulario para registrar su pago.

    <form class="form-payment" method="post" action="<?php echo get_current_url() ?>">

        <label><span class="asterisk">*</span>Quinta:</label>
        <select name="ceiba-quinta" class="form-payment-select">
            <?php
            $quintas = pods("quinta")->find();
            while ($quintas->fetch()):
                ?>
                <option value="<?php echo $quintas->id() ?>">
                    <?php echo $quintas->field("nombre") ?>
                </option>
            <?php endwhile ?>
        </select>


        <label><span class="asterisk">*</span>Monto:</label>
        <input type="text" name="ceiba-monto"/>


        <label><span class="asterisk">*</span>Fecha:</label>
        <input type="date"/>

        <label><span class="asterisk">*</span>Forma de pago:</label>
        <select name="ceiba-forma" class="form-payment-select">
            <?php
            $formas = pods("forma_de_pago")->find();
            while ($formas->fetch()):
                ?>
                <option value="<?php echo $formas->field("ID") ?>">
                    <?php echo $formas->field("nombre") ?>
                </option>
            <?php endwhile ?>
        </select>

        <label><span class="asterisk">*</span>Banco:</label>
        <select name="ceiba-banco" class="form-payment-select">
            <?php
            $bancos = pods("banco")->find();
            while ($bancos->fetch()):
                ?>
                <option value="<?php echo $bancos->field("ID") ?>">
                    <?php echo $bancos->field("nombre") ?>
                </option>
            <?php endwhile ?>
        </select>

        <label><span class="asterisk">*</span>Nº de confirmación o depósito:</label>
        <input type="text" name="ceiba-tipo"/>
        <button type="submit">Enviar</button>
    </form>

<?php get_template_part('template-part', 'wrap-after'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>