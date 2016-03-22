<?php
/* @var $this SfAcSegController */
/* @var $model SfAcSeg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	#'id'=>'sf-ac-seg-SfAcSeg-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array('validateOnSubmit'=>true),
	'method'=>'POST',
	'action'=>Yii::app()->createUrl('SfAcSeg/Registrar_acseg')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php $model =new SfAcSeg; ?>
<div class="panel panel-azul">
            <div class="panel-heading"><h3 class="panel-title"><center>seguimiento alto costo</center></h3></div>
            <div id="frmBusqueda1" class="panel"> 
  <fieldset>
  <div id="div_sifilis" class="panel panel-success">
  <table class="table table-ajustado">
  <tbody>

  <tr class="text-azul">
  <td class="dvtCellLabel1" width="20%">Diagnostico</td>
  <td class="dvtCellLabel1" width="20%">Tipo de Riesgo solo para cardiovascular</td>
  <td class="dvtCellLabel1" width="20%">Fecha Seguimiento 1</td>
  <td class="dvtCellLabel1" width="20%">Asistencia a control</td>
  <td class="dvtCellLabel1" width="20%">Motivo de inasistencia</td>


    
  </tr>

  <tr>
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'diagnostico',
                                array('widgetOptions' => array(
                                  'data'=>$model->Diagnostico(),
                                      'htmlOptions' => array('prompt' => 'Seleccione')
                                                        ),
                                      'label'=>'')); ?></td>
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'trcardio',array(
  	                 'widgetOptions' => array(
					'data' =>$model->riesgocardiovascular(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td>
   <td class="dvtCellInfo">      
     <?php echo $form->datePickerGroup(
            $model,
            'fecseg',
            array(
                'widgetOptions' => array(
                    'options' => array(
                        'language' => 'es',
                        'format' => 'yyyy-mm-dd',

                    ),
                ),'label'=>'','onKeyUp'=>'this.value=formateafecha_a_m_d(this.value);', 'onBlur'=>"this.value=valida_fecha(this.value); $('#SfMujer10a59_fum').datepicker('hide');"    
                
                #'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
            )
        ); ?>
      </td>
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'asistecon',array(
  	                 'widgetOptions' => array(
					'data' =>$model->getSi_No(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td> 
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'motinasiste',array(
  	                 'widgetOptions' => array(
					'data' =>$model->motivoinasis(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td>
  
  </tr >
  <!--         fin primeros cuatro td      -->
  </tbody>
  </table>
  <br>
  <table class="table table-ajustado">
  <tbody>

  <tr class="text-azul">
  <td class="dvtCellLabel1" width="20%">Esta en tratamiento actualmente</td>
  <td class="dvtCellLabel1" width="20%">Motivo para no estar en tratamiento</td>
  <td class="dvtCellLabel1" width="20%">Nombre de medicamentos recibidos</td>
  <td class="dvtCellLabel1" width="20%">Asume habitos recomendados</td>
  <td class="dvtCellLabel1" width="20%">Motivo para no asumir habitos saludables</td>


    
  </tr>

  <tr>
   <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'tratactual',array(
  	                 'widgetOptions' => array(
					'data' =>$model->getSi_No(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td> 
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'motnotrata',array(
  	                 'widgetOptions' => array(
					'data' =>$model->motivonotrata(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td>
  <td class="dvtCellInfo"><?php echo $form->textFieldGroup($model,'medicamentos',
                                array('widgetOptions' => array(
                                      'htmlOptions' => array('style' => 'text-transform:uppercase;')
                                                        ),
                                      'label'=>'')); ?></td>
   <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'habitos',array(
  	                 'widgetOptions' => array(
					'data' =>$model->getSi_No(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td> 
 
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'nohabitos',array(
  	                 'widgetOptions' => array(
					'data' =>$model->motivonohab(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td>
  
  </tr >
  <!--         fin primeros cuatro td      -->
  </tbody>
  </table>
  <br>
  <table class="table table-ajustado">
  <tbody>

  <tr class="text-azul">
  <td class="dvtCellLabel1" width="20%">Se realizo paraclinicos ordenados  (O=no aplica)</td>
  <td class="dvtCellLabel1" width="40%">Motivo para no realizarse el paraclinico</td>
  <td class="dvtCellLabel1" width="20%">Tuvo  complic. en el periodo de seguimiento</td>
  <td class="dvtCellLabel1" width="20%">Se hospitalizo en el periodo de seguimiento</td>
  


    
  </tr>

  <tr>
   <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'paracord',array(
  	                 'widgetOptions' => array(
					'data' =>$model->paraclinico(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td> 
  <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'noparacord',array(
  	                 'widgetOptions' => array(
					'data' =>$model->noparaclinico(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td>

   <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'complica',array(
  	                 'widgetOptions' => array(
					'data' =>$model->getSi_No(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td>  
   <td class="dvtCellInfo"><?php echo $form->dropDownListGroup($model,'hospital',array(
  	                 'widgetOptions' => array(
					'data' =>$model->getSi_No(),
          'htmlOptions'=>array('prompt'=>'Seleccione'),					
				     ),'label'=>'')); ?></td> 
 
 
  
  </tr >
  <!--         fin primeros cuatro td      -->
  </tbody>
  </table>
  </div>



  <div id="div_retratamiento" class="panel panel-success">  
  <div class="panel-heading panel-title"><center>Solo para HT, DB y Renales</center></div>
   <td>
  <table class="table table-ajustado">  
  <tbody>
<td> 
  <div id="div_retratamiento" class="panel panel-success">
 
   <div class="panel-heading panel-title"><center>Medicion de TA</center></div>
  <table class="table table-ajustado">  
  <tbody>
  <tr class="text-azul">
  <td class="dvtCellLabel1" width="20%">Sistolica</td>
 <td class="dvtCellLabel1" width="20%">Diastolica</td>

  
  <!--<td class="dvtCellLabel1" width="15%">Dosis</td>
  <td class="dvtCellLabel1" width="15%">Dosis Horaria</td>
  <td class="dvtCellLabel1" width="15%">Días Tratamiento</td>-->
  </tr>
  <tr>
<td class="dvtCellInfo"><input type="text" class="form-control" placeholder=""></td>
<td class="dvtCellInfo"><input type="text" class="form-control" placeholder=""></td>
 
  
  </tr>
  </tbody></table>
  </div>
</td>

<td>

<div id="div_retratamiento" class="panel panel-success">
 
   <div class="panel-heading panel-title"><center>Peso en Kg</center></div>
  <table class="table table-ajustado">  
  <tbody>
  <tr class="text-azul">
  
  <td class="dvtCellLabel1" width="40%"><span style="color:#C7C7C7;font-size:0px">No</span></td>
 
  
  <!--<td class="dvtCellLabel1" width="15%">Dosis</td>
  <td class="dvtCellLabel1" width="15%">Dosis Horaria</td>
  <td class="dvtCellLabel1" width="15%">Días Tratamiento</td>-->
  </tr>
  <tr>

<td class="dvtCellInfo"><input type="text" class="form-control" placeholder="Kg"></td>
 </tr>
  </tbody></table>
  </div>
</td>
  </tbody></table>
  </div>
  <div id="div_sifilis" class="panel panel-success">
  <table class="table table-ajustado">
  <tbody>

  <tr class="text-azul">
  <td class="dvtCellLabel1" width="30%">Remision a:</td>
  <td class="dvtCellLabel1" width="30%">Fecha Remision (D-M-A)</td>
  <td class="dvtCellLabel1" width="40%">IPS REMITIDA</td>
  


    
  </tr>

  <tr>

  <td class="dvtCellInfo"><datalist id="rem"><option value="1-Medico"><option value="2-Inasistente"></datalist>
  <input type="text" list="rem" placeHolder="" class="form-control"></td>
  <td class="dvtCellInfo"><div class="input-group date">
                          <input NAME="fecha_rem11" type="text" class="form-control" id="fecha_rem11" size="10" maxlength="10" value="" Color="#ffff00" tabindex="1" onKeyUp = "this.value=formateafecha_d_m_a(this.value);" onBlur = "this.value=valida_fecha(this.value); $('#fecha_rem11').datepicker('hide');" onClick="this.select()" placeholder="DD-MM-YYYY"/>
                            <span class="input-group-addon" onClick="$('#fecha_rem11').datepicker('show');"><i class="fa fa-calendar"></i></span>
      </div></td>   
  <td class="dvtCellInfo"><input type="text" id="ape1" class="form-control" placeholder="IPS REMITIDA"></td>
  
  </tr >
  <!--         fin primeros cuatro td      -->
  </tbody>
  </table>
  </div>  
  </fieldset>
  </div>  
  </div>
  </div>
	<div class="row buttons">
		<?php echo CHtml::htmlButton('<i class="glyphicon glyphicon-floppy-disk"></i> Guardar y continuar',array('type'=>'submit','class' => 'btn btn-primary'));
 ?>
	</div>

	<!--<div class="row">-->
		<?php  /* echo $form->labelEx($model,'asistecon'); ?>
		<?php echo $form->textField($model,'asistecon'); ?>
		<?php echo $form->error($model,'asistecon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motinasiste'); ?>
		<?php echo $form->textField($model,'motinasiste'); ?>
		<?php echo $form->error($model,'motinasiste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tratactual'); ?>
		<?php echo $form->textField($model,'tratactual'); ?>
		<?php echo $form->error($model,'tratactual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motnotrata'); ?>
		<?php echo $form->textField($model,'motnotrata'); ?>
		<?php echo $form->error($model,'motnotrata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'habitos'); ?>
		<?php echo $form->textField($model,'habitos'); ?>
		<?php echo $form->error($model,'habitos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nohabitos'); ?>
		<?php echo $form->textField($model,'nohabitos'); ?>
		<?php echo $form->error($model,'nohabitos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paracord'); ?>
		<?php echo $form->textField($model,'paracord'); ?>
		<?php echo $form->error($model,'paracord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noparacord'); ?>
		<?php echo $form->textField($model,'noparacord'); ?>
		<?php echo $form->error($model,'noparacord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complica'); ?>
		<?php echo $form->textField($model,'complica'); ?>
		<?php echo $form->error($model,'complica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hospital'); ?>
		<?php echo $form->textField($model,'hospital'); ?>
		<?php echo $form->error($model,'hospital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnostico'); ?>
		<?php echo $form->textField($model,'diagnostico'); ?>
		<?php echo $form->error($model,'diagnostico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trcardio'); ?>
		<?php echo $form->textField($model,'trcardio'); ?>
		<?php echo $form->error($model,'trcardio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentos'); ?>
		<?php echo $form->textField($model,'medicamentos'); ?>
		<?php echo $form->error($model,'medicamentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otromotina'); ?>
		<?php echo $form->textField($model,'otromotina'); ?>
		<?php echo $form->error($model,'otromotina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecseg'); ?>
		<?php echo $form->textField($model,'fecseg'); ?>
		<?php echo $form->error($model,'fecseg'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); */ ?>
	<!--</div>-->

<?php $this->endWidget(); ?>

</div><!-- form -->