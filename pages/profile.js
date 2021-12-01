var Ajax_data_holder = "bruh";
// alert("Successfully connected with profile.js");

$(document).ready(function() {
    // alert("Successfully connected with profile.js");
    Load_Profiles();
    Load_Interests();
    Load_PFP();
    


});


function Load_Profiles() {
    $.ajax({
        type:"POST",
        url:"desc.php",   //this gets the data

        success: function(data) {   //if it successfully retrieves the data this will run
            
            $("#desc").html(data);

            
        }, error: function(msg) {   //if it fails to retrieve the data this will run
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    }); 
}

function Load_Interests() {
    $.ajax({
        type:"POST",
        url:"interests.php",   //this gets the data

        success: function(data) {   //if it successfully retrieves the data this will run
            
            // alert(data);
            $("#interests").html(data);

            
        }, error: function(msg) {   //if it fails to retrieve the data this will run
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    }); 
}

function Load_PFP() {
    $.ajax({
        type:"POST",
        url:"PFP.php",   //this gets the data

        success: function(data) {   //if it successfully retrieves the data this will run
            
            // alert(data);
            $(".profile_container").prepend(data);

            
        }, error: function(msg) {   //if it fails to retrieve the data this will run
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    }); 
}