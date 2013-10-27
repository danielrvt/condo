<?php

/**
 * Template Name: Registrar Un Pago
 */

get_header();
get_template_part('template-part', 'wrap-before');

/**
 * Retorna el mensaje de error de las validaciones o 1 si es válido.
 */
function validate()
{
    $result = 1;
    $theDate = DateTime::createFromFormat('Y-m-d', $_POST["ceiba-fecha"]); //->format('d-m-Y');

    if (!is_object($theDate)) {
        return 0;
    }

    if (empty($_POST["ceiba-quinta"])) return 0; //$result = "Debe ingresar la Qta.";
    if (empty($_POST["ceiba-monto"]) || intval($_POST["ceiba-monto"]) < 1)  return 0; //$result = "Debe ingresar el Monto.";
    if (empty($_POST["ceiba-fecha"])) return 0; //$result = "Debe ingresar la Fecha.";
    if (empty($_POST["ceiba-forma"])) return 0; //$result = "Debe ingresar la Forma de pago.";
    if (empty($_POST["ceiba-banco"])) return 0; //$result = "Debe ingresar el Banco desde el que paga.";
    if (empty($_POST["ceiba-confirmacion"])) return 0; //$result = "Debe ingresar el Tipo de pago.";

    return result;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!validate()) {
        $message = "Debe introducir los campos obligatorios.";
    } else {

        $quinta = pods("quinta", intval($_POST["ceiba-quinta"]));
        $theDate = DateTime::createFromFormat('Y-m-d', $_POST["ceiba-fecha"])->format('d/m/Y');
        $pod = pods("pago");
        $pago = array(
            'quinta' => $quinta->id(), //intval($_POST["ceiba_quinta"]),
            'monto' => floatval($_POST["ceiba_monto"]),
            'fecha' => $theDate,
            'tipo_de_pago' => intval($_POST["ceiba_forma"]),
            'numero' => intval($_POST["ceiba_confirmacion"]),
            'title' => $quinta->field("nombre") . "-" . $theDate
        );

        $id = $pod->add($pago);
    }
}

?>

    Llene el formulario para registrar su pago.


    <span class="asterisk"><?php echo $message ?></span>
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
        <input name="ceiba-fecha" type="date"/>

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
        <input type="text" name="ceiba-confirmacion"/>
        <button type="submit">Enviar</button>
    </form>

<?php get_template_part('template-part', 'wrap-after'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>