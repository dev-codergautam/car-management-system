<?php 
function cars_slug($slug, $separator='-', $increment_number_at_end=FALSE) {    
    $last_char_is_number = is_numeric($slug[strlen($slug)-1]);
    $slug = $slug. ($last_char_is_number && $increment_number_at_end? '.':'');

    $i=0;
    $limit = 20; 
    while( get_instance()->db->where('carSlug', $slug)->count_all_results('car') != 0) {
        $slug = increment_string($slug, $separator);

        if($i > $limit) {
            return FALSE;
        }

        $i++;
    }

    if($last_char_is_number && $increment_number_at_end) $slug = str_replace('.','', $slug);

    return strtolower($slug);
}

function serviceCheckSlug($slug, $separator='-', $increment_number_at_end=FALSE) {    
    $last_char_is_number = is_numeric($slug[strlen($slug)-1]);
    $slug = $slug. ($last_char_is_number && $increment_number_at_end? '.':'');

    $i=0;
    $limit = 200; 
    while( get_instance()->db->where('s_nameslug', $slug)->count_all_results('services') != 0) {
        $slug = increment_string($slug, $separator);

        if($i > $limit) {
            return FALSE;
        }

        $i++;
    }

    if($last_char_is_number && $increment_number_at_end) $slug = str_replace('.','', $slug);

    return strtolower($slug);
}

function dealerCheckSlug($slug, $separator='-', $increment_number_at_end=FALSE) {    
    $last_char_is_number = is_numeric($slug[strlen($slug)-1]);
    $slug = $slug. ($last_char_is_number && $increment_number_at_end? '.':'');

    $i=0;
    $limit = 200; 
    while( get_instance()->db->where('dealerSlug', $slug)->count_all_results('dealer') != 0) {
        $slug = increment_string($slug, $separator);

        if($i > $limit) {
            return FALSE;
        }

        $i++;
    }

    if($last_char_is_number && $increment_number_at_end) $slug = str_replace('.','', $slug);

    return strtolower($slug);
}
function festive_slug($string){
    $slug = trim($string);
    $slug = strtolower($slug);
    $slug = str_replace(' ', '-', $slug);

    return $slug;
}
?>
