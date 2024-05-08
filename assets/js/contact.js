const ml = document.getElementById("contactmail");
const sname = document.getElementById("name").value;
const umail = document.getElementById("email").value;
const sub = document.getElementById("subject").value;
const msg = document.getElementById("message").value;

(function(){
    emailjs.init({
      publicKey: "aSbGRvxIqXH_CGXQx",
    });
 })();
ml.addEventListener("click", () => {
    // event.preventDefault();
    sendmail();
})
function sendmail() {
    //event.preventdefault();
    (function () {
        emailjs.init("you js code");
    })();
    var params = {
        name:sname,
        sendername: "railway",
        to: "kalelkarnoman014@gmail.com",
        subject: sub,
        message:
           umail + "</br>" + msg,
    };
    var serviceid = "service_4ki4b5k";
    var templateid = "template_s4fbtqi";
    emailjs.send(serviceid, templateid, params).then(
        function (response) {
            console.log("SUCCESS!", response.status, response.text);
            alert("email sended sucessfully");
        },
        function (error) {
            console.log("FAILED...", error);
            alert("failed please check your email");
        }
    );
}