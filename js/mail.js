/**
 * Created by matheus on 18/08/16.
 */
function sendMail() {
    var senderemail = document.getElementsByName("senderName")
    var dist = "matheusinacio.bs@gmail.com"
    var link = "mailto:me@example.com"
            + "?cc=myCCaddress@example.com"
            + "&subject=" + escape("This is my subject")
            + "&body=" + escape(document.getElementById('myText').value)
        ;

    window.location.href = link;
}