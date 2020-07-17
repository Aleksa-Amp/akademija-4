<?php

function renderCourses($courses)
{
    $html = '';
    foreach ($courses as $course) {
        $visiblityClass = $course->open_for_submissions ? "" : "hidden";

        $students = loadAndRenderStudents($course->students_data);
        $html .= <<< HTML
            <div class="card" style="border: 5px solid red; margin-bottom: 50px;">
                <h2>$course->title</h2>
                <!-- <img src="$course->img" alt="$course->title"> -->
                <div class="on-hover">
                    <p>
                        <b>Mentor:</b> $course->mentor <br>
                        <b>Broj polaznika:</b> $course->total_students <br>
                        <b>Broj generacija:</b> $course->generations <br>
                    </p>
                    <button class="$visiblityClass">Prijavi se</button>
                    <h3> Dosadasnji polaznici i njihove ocjene: </h3>
                    $students
                </div>
            </div>
HTML;
    }

    return $html;
}

function loadAndRenderStudents($file){
    $jsonString = file_get_contents($file);
    $studentsData = json_decode($jsonString, false);

    $return = '';
    foreach($studentsData as $student){
        $return .= renderOneStudent($student);
    }

    return $return;
}

function renderOneStudent($student){
    $color = 'red';
    if($student->mark > 5){
        $color = 'yellow';
    }
    if($student->mark == 10){
        $color = 'green';
    }
    
    return <<< HTML
        <p style="color: $color"> <b>Ime:</b> $student->id  --- <b>Ocjena:</b> $student->mark </p>
HTML;
}


function renderForm($formFileds){
    $return = '<form>';

    foreach($formFileds as $field){
        if($field->type == 'text' || $field->type == 'number'){
            $return .= renderInput($field);
        }
        if($field->type == 'select'){
            $return .= renderSelect($field);
        }
        if($field->type == 'submit'){
            $return .= renderSubmit($field);
        }
    }

    $return .= '</form>';

    
    return $return;
}

function renderInput($input){

    return <<< HTML
        <input type="$input->type" name="$input->name" id="$input->name" placeholder=""><br>
HTML;
}

function renderSelect($select){

    $options = renderOptions($select->options);
    return <<< HTML
        <select id="$select->name" name="$select->name">
            $options
        </select>
HTML;
}

function renderOptions($options){

    $ret = '';
    foreach($options as $option){
        $ret .= <<< HTML
            <option value="$option->value">$option->title</option>
HTML;
    }
    return $ret;
}

function renderSubmit($submit){
    return <<< HTML
        <input type="submit" value="$submit->value" formaction="$submit->form_action">
HTML;
}

?>