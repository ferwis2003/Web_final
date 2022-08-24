<?php 

function asg_input($id, $label, $value= "",  $opts=[]){

    $type = "text";
    $class = "";
    $attrs = "";    



    extract($opts);

    $input = <<<INPUT

    <input {$attrs} id="{$id}" value={$value} name="{$id}" type="{$type}" class="{$class}" >

INPUT;

    if($type == 'textarea'){
        $class = "materialize-textarea";
        $input = <<<INPUT
        <textarea {$attrs} id="{$id}" name="{$id}" class="{$class}">{$value}</textarea>

INPUT;
    }


    return <<<COMPONENTE

    <div class="row">
        <div class="input-field col s12">
          {$input}
          <label for="password">{$label}</label>
        </div>
    </div>

COMPONENTE;
}