

var uid, fname, surname;

VK.api('users.get',{},function(data) {

        var responsevk=data.response[0];

        fname=responsevk.first_name;

        document.getElementById("firstname").innerHTML=fname;

});






