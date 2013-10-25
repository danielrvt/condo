<?php

/**
 * Template Name: Registrar Un Pago
 */

get_header();
get_template_part('template-part', 'wrap-before');

// validar datos.
//$quintas = pods("quinta")->find();
$bancos = pods("banco")->find();


while ($quintas->fetch()) {
    var_dump($quintas->field("ID"));
    var_dump($quintas->field("nombre"));
}

?>

    Llene el formulario para registrar su pago.

    <form class="form-payment" method="post" action="<?php echo get_current_url() ?>">
        <label><span class="red">*</span>Quinta:</label>
        <select name="quinta">

            <?php
                $quintas = pods("quinta")->find();
                while ($quintas->fetch()):
            ?>
                <option value="<?php echo $quintas->field("ID") ?>">
                    <?php echo $quintas->field("nombre") ?>
                </option>
            <?php endwhile ?>
        </select>

        <label><span class="red">*</span>Monto:</label>
        <input type="text" name="monto"/>

        <label><span class="red">*</span>Fecha:</label>
        <input type="date"/>

        <label><span class="red">*</span>Forma de pago:</label>
        <select name="tipo">
            <option value="deposito">Depósito</option>
            <option value="transferencia">Transferencia</option>
        </select>

        <label><span class="red">*</span>Banco:</label>
        <select name="banco">
            <option value="banesco">Banesco</option>
            <option value="provincial">Provincial</option>
            <option value="mercantil">Mercantil</option>
        </select>

        <label><span class="red">*</span>Nº de confirmación o depósito:</label>
        <input type="text" name="tipo"/>

        <button type="submit">Enviar</button>
    </form>

<?php get_template_part('template-part', 'wrap-after'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>