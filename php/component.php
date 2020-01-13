<?php
    function inputElement($placeholder, $value, $name){
        $ele="
        <label class=\"sr-only\" for=\"inlineFormInputGroup\">Username</label>
                            <div class=\"input-group mb-2\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text bg-warning\">@</div>
                                </div>
                                <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                            </div>
        ";
        echo $ele;
    }

    function buttonElement($btnid,$styleclass,$text,$name,$attr){
        $btn="
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
        ";

        echo $btn;
    }

?>