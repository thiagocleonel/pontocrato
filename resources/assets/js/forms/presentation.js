function watch(fields,changed_array,old_object){
  fields.forEach(function(field){
    field.change(function(event) {
      old_value = old_object[$(this).attr("name")];
      if($(this).attr("name") == "dotacao"){
        if($(this).maskMoney('unmasked')[0] != old_value){
          changed_array['dotacao'] = $(this).maskMoney('unmasked')[0];

        }else{
          delete changed_array['dotacao'];
        }
      }else{
        if($(this).val().trim().toUpperCase() != old_value){
          changed_array[$(this).attr("name")] = $(this).val().trim().toUpperCase();
        }else{
          delete changed_array[$(this).attr("name")];
        }
      }
    console.log(changed_array);
    });
  });
}

function watchInsercaoLoaAdmin(fields,changed_array,old_object){
  fields.forEach(function(field){
    field.change(function(event) {
      old_value = old_object[$(this).attr("name")];
      if($(this).attr("name") == "dotacao"){
        if($(this).maskMoney('unmasked')[0] != old_value){
          changed_array['dotacao'] = $(this).maskMoney('unmasked')[0];

        }else{
          delete changed_array['dotacao'];
        }
      }else{
        if($(this).val().trim().toUpperCase() != old_value){
          changed_array[$(this).attr("name")] = $(this).val().trim().toUpperCase();
        }else{
          delete changed_array[$(this).attr("name")];
        }
      }
        if(Object.keys(modificados).length > 0){
          $("#justificativaAvaliacaoLoaHomologacaoInsercaoAprovar").prop('readonly', false);
          $("#hasChangesAvaliacaoLoaHomologacaoInsercaoAprovarHomologacao").val("1");
        }else{
          $("#justificativaAvaliacaoLoaHomologacaoInsercaoAprovar").attr('readonly', true);
          $("#hasChangesAvaliacaoLoaHomologacaoInsercaoAprovarHomologacao").val("0");

        }
    });
  });
}
