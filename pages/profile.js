// alert("Successfully connected with profile.js");

$(document).ready(function() {
    // alert("Successfully connected with profile.js");
    Load_Profiles();
    Load_Interests();
    Load_PFP();
    Load_Names();
    Load_SM();
});


$( function() {
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
            effect: "fade",
            duration: 1000
        },
        hide: {
            effect: "fade",
            duration: 1000
        }
    });
    
    $( ".add" ).on( "click", function() {
        $( "#dialog" ).dialog( "open" );
      });
});

var selectedValue;

function changeFunc() {
    var selectBox = document.getElementById("social_medias");
    selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == "") {
        alert("You have not selected anything");

    // } else if (selectedValue == "Other") {
    //     alert("you have selected Other");
        
    } else {
        // alert(selectedValue);
        $.ajax({
            type:"POST",
            url: "desc.php",
            data: {"social_media_grab": selectedValue},

            success: function(data) {
                // alert("This was a success!");
                console.log(data);
                $("#sc_input").html(data);
    
            }, error: function(msg) {
                alert("There was a problem: " + msg.status + " " + msg.statusText);
            }
        });
    } 
}

function change_sm(sm_title, obj) {
    console.log("You have changed a social media");
    console.log(sm_title);
    console.log(obj.value);

    $.ajax({
        type:"POST",
        url: "desc.php",
        data: {"change_sm": sm_title, "new_value_sm": obj.value},

        success: function(data) {
            // alert("This was a success!");
            console.log(data);
            $("#sm_msg").html("Changes saved for " + sm_title + " Link!");

        }, error: function(msg) {
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    });

}


function Load_Profiles() {
    $.ajax({
        type:"POST",
        url:"desc.php",   //this gets the data
        data: "desc",

        success: function(data) {   //if it successfully retrieves the data this will run
            
            $("#desc").html(data);
            
        }, error: function(msg) {   //if it fails to retrieve the data this will run
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    }); 
}

function delete_interest(obj) {
    $.ajax({
        type:"POST",
        url:"interests.php",
        data: {"delete": obj},

        success: function(data) {
            Load_Interests();

        }, error: function(msg) {
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    });
}


$("#add_interests").on('submit', function(e) {
    e.preventDefault();
    
});

function add_interests(obj) {
    let interest_ = $("#interest_name").val();
    $.ajax({
        type: "POST",
        url: "interests.php",
        data: {"add_interest": interest_},

        success: function(data) {
            $("#error_msg").html(data);
            
            Load_Interests();

        }, error: function(msg) {
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }


    })
}

function Load_SM() {
    $.ajax({
        type:"POST",
        url:"desc.php",   //this gets the data
        data: "sm",

        success: function(data) {   //if it successfully retrieves the data this will run
            
            $(".social_media_header").html(data);
            
        }, error: function(msg) {   //if it fails to retrieve the data this will run
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    }); 
}


function Load_Names() {
    $.ajax({
        type:"POST",
        url:"desc.php",   //this gets the data
        data: "name",

        success: function(data) {   //if it successfully retrieves the data this will run
            
            $(".profile_header").html(data);
            
        }, error: function(msg) {   //if it fails to retrieve the data this will run
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    }); 
}

function Load_Interests() {
    $.ajax({
        type:"POST",
        url:"interests.php",   //this gets the data
        data: "LOAD",

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


function change_pfpicture(link) {
    console.log(link);
    var new_link = "profile_images/" + link;
    console.log(new_link);

    $.ajax({
        type: "POST",
        url: "desc.php",
        data: {"pfp" : new_link},

        success: function(data) {
            console.log(data);
            $("#pfp_msg").html(data + link + ". Refresh your page to see your change!");
            // Load_PFP();
            

        }, error: function(msg) {
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    });
    
}

function change_pfp(type_, obj) {

    test = obj;
    if (type_ === "fname") {

        $.ajax({
            type: "POST",
            url: "profile_edit_form.php",
            data: {"fname" : obj.value},
    
            success: function(data) {
                // console.log(data);
                $("#profile_msg").html("Changes saved for First Name!")
                
    
            }, error: function(msg) {
                alert("There was a problem: " + msg.status + " " + msg.statusText);
            }
        });


    } else if (type_ === "lname") {
        $.ajax({
            type: "POST",
            url: "profile_edit_form.php",
            data: {"lname" : obj.value},
    
            success: function(data) {
                // console.log(data);
                $("#profile_msg").html("Changes saved for Last Name!")
                
    
            }, error: function(msg) {
                alert("There was a problem: " + msg.status + " " + msg.statusText);
            }
        });
    } else if (type_ === "email") {
        $.ajax({
            type: "POST",
            url: "profile_edit_form.php",
            data: {"email" : obj.value},
    
            success: function(data) {
                // console.log(data);
                $("#profile_msg").html("Changes saved for Email!")
                
    
            }, error: function(msg) {
                alert("There was a problem: " + msg.status + " " + msg.statusText);
            }
        });
    } else if (type_ === "desc") {
        $.ajax({
            type: "POST",
            url: "profile_edit_form.php",
            data: {"desc" : obj.value},
    
            success: function(data) {
                // console.log(data);
                $("#profile_msg").html("Changes saved for your Description!")
                
    
            }, error: function(msg) {
                alert("There was a problem: " + msg.status + " " + msg.statusText);
            }
        });
    }



}


