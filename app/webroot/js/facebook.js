/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

// Additional JS functions here
window.fbAsyncInit = function() {
    FB.init({
        appId      : '405182236232625', // App ID
        channelUrl : '//testfaycel.com/PhpProject1/posts', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true,  // parse XFBML
        oauth      : true
    });

// Additional init code here

};

// Load the SDK Asynchronously
(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/fr_FR/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));


$(function(){
    $('.facebookConnect').on('click',function(){
        // url : PhpProject2/users/facebook
        var url = $(this).attr('href');
        FB.login(function(response) {
            if (response.authResponse) {
            // connected
            window.location = url;
        } else {
            // error
            console.log(response.authResponse);
        }
    });
    });
});