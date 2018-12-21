<?php $result1 = $this->pu38servi->listar(); ?>
<?php $result2 = $this->pu26planreg->listar(); ?>
<?php $result3 = $this->pu26planreg1->listarNicoya(); ?>
<?php $result4 = $this->pu26planreg2->listarSamara(); ?>
<?php $result5 = $this->pu13aap->listar(); ?>

<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡ Si estas conectado desde un celular o tablet, preferiblemente utilícelo en forma horizontal !</strong>
</div>
<center><h2>Agregar Nuevo Trámite</h2></center>
<form action="?c=class04ingresotramite&m=agregar" enctype="multipart/form-data" method="post" >

  <div class="container-fluid">
    <div class="col-sm-offset-4 col-sm-4">
      <div class="form-group row">

        <label for="PU04IDTRA">Código del Trámite:</label>
        <input type="text" class="form-control" id="PU04IDTRA" name="PU04IDTRA">

      </div>

      <div class="container-fluid">
        <div class="form-group row">

          <label for="PU04FETRA">Fecha de Revisión de Expediente:</label>
          <input type="date" class="form-control" name="PU04FETRA" id="">

        </div>
      </div>
      <div class="form-group">

        <label for="PU04IDDISTRITO">Distrito al que pertenece: </label>
        <select class="form-control selectpicker" name="PU04IDDISTRITO" id="PU04IDDISTRITO">
          <option value="Seleccione">Seleccione...</option>
          <option value="Nicoya">Nicoya</option>
          <option value="Masión">Masión</option>
          <option value="San Antonio">San Antonio</option>
          <option value="Quebrada Honda">Quebrada Honda</option>
          <option value="Sámara">Sámara</option>
          <option value="Nosara">Nosara</option>
          <option value="Belén">Belén</option>
        </select>

      </div>
    </div>
  </div>
  <br> <br> <br>
  <br> <br> <br>

  <div class="container-fluid  well   ">
    <div class="form-group">
      <p><b>Accesos :</b></p>
      <?php while ($row = mysqli_fetch_array($result1)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU38IDSERVIDUMBRE'];?>" name="pu38servi[]"><?php echo $row['PU38DESCRIPSERVIDUM']; ?>
        </label>
      <?php endwhile; ?>
    </div>
  </div><br><br>


  <div class="container-fluid  well   ">
    <div class="form-group">
      <p><b>Plan Regulador :</b></p>
      <?php while ($row = mysqli_fetch_array($result2)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU26IDPLAN'];?>" name="pu26planreg[]"><?php echo $row['PU26PLNDESC']; ?>
        </label>
      <?php endwhile; ?>
    </div>
  </div><br><br>

  <div class="container-fluid  well   ">
    <div class="form-group">
      <p><b>Nicoya :</b></p>
      <?php while ($row = mysqli_fetch_array($result3)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU26IDDESCNICOYASAMA'];?>" name="pu26planreg1[]"><?php echo $row['PU26DESCACNICOYASAMA']; ?>
        </label>
      <?php endwhile; ?>
    </div>
  </div><br><br>

  <div class="container-fluid  well   ">
    <div class="form-group">
      <p><b>Sámara :</b></p>
      <?php while ($row = mysqli_fetch_array($result4)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU26IDDESCNICOYASAMA'];?>" name="pu26planreg1[]"><?php echo $row['PU26DESCACNICOYASAMA']; ?>
        </label>
      <?php endwhile; ?>
    </div>
  </div><br><br>

  <div class="container-fluid  well   ">
    <div class="form-group">
      <p><b>Afectación de Áreas de Protección :</b></p>
      <?php while ($row = mysqli_fetch_array($result5)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU13IDAAP'];?>" name="pu13aap[]"><?php echo $row['PU13DESCAAP']; ?>
        </label>
      <?php endwhile; ?>
    </div>
  </div><br><br>

  <div class="container-fluid  well   ">
    <tr>
      <td><label class="control-label">Imagen Terreno</label></td>
      <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
  </div>
  <br><br>
  <button type="submit" name="btnsave" class="btn btn-success">Guardar Trámite</button>
  <a id="regresar" class="btn btn-danger" role="button" href="?c=class04ingresotramite&m=index">Regresar</a>
</form>

<br><br><br>
