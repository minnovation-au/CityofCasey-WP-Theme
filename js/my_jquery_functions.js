$(document).ready(function(){
    $("button").click(function(){
        $("p").hide();
    });
});


$(document).ready(function(){
    $("button").click(function(){
        
        $session_ID = session_id();
        global $wpdb;
	$wpdb->query("INSERT INTO wp_ci (Session_id,Question_1) VALUES ('session_ID', 'No')");
        });
});

$wpdb->query("INSERT INTO wp_ci (Session_id,Question_1) VALUES ('session_ID', 'No')");


function subb(){ $session_ID = session_id();
        global $wpdb;
        "echo 'hi'"
        }
       