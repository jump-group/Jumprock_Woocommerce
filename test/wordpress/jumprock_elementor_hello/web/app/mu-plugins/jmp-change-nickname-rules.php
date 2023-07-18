<?php
/*
Plugin Name: wpmu no username error
*/

function wpmu_no_username_error( $result ) {
    $error_name = $result[ 'errors' ]->get_error_messages( 'user_name' );
    if ( empty ( $error_name ) 
        or false===$key=array_search( __( 'Usernames can only contain lowercase letters (a-z) and numbers.' ), $error_name)
    ) {
        return $result;
    }

    //  only remove the error we are disabling, leaving all others
    unset ( $result[ 'errors' ]->errors[ 'user_name' ][$key] );

    if(empty($result[ 'errors' ]->errors[ 'user_name' ])){
        unset($result[ 'errors' ]->errors[ 'user_name' ]);
    }
    /**
     *  re-sequence errors in case a non sequential array matters
     *  e.g. if a core change put this message in element 0 then get_error_message() would not behave as expected)
     */

    return $result;
}
add_filter( 'wpmu_validate_user_signup', 'wpmu_no_username_error' );