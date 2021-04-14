<?php 

/*

add_shortcode( 'activeplugins', function(){
	
	$active_plugins = get_option( 'active_plugins' );
	$plugins = "";
	if( count( $active_plugins ) > 0 ){
		$plugins = "<ul>";
		foreach ( $active_plugins as $plugin ) {
			$plugins .= "<li>" . $plugin . "</li>";
		}
		$plugins .= "</ul>";
	}
	return $plugins;
});
*/


//do_shortcode("[activeplugins]");


	//oxygen action : ct_save_components_tree
    $check = $_GET["action"] == "ct_save_components_tree";

    if($check){
        
       
        
        add_filter( 'option_active_plugins', function( $plugins ){
    		    
    		$myplugins = array( 
    			"polylang/polylang.php", 
    			//...
    			//add other plugin that should give problems
    	
    		);
    		    $plugins = array_diff( $plugins, $myplugins );
    		
    	
    		return $plugins;

        	} 
    	);
    }
        
    
    
    
	

?>
