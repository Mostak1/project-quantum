

class emailClass {
    constructor(e, p, rp) {
        this.e1 = e;
        this.p2 = p;
        this.rp1 = rp;
        
    }
    eclassFunction() {
        let rex = /\S+@\S+\.\S+$/;
        let result = rex.test(this.e1);
        let rexp = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
        let resultP = rexp.test(this.p2);

        let pw1 = document.getElementById("pass").value;
        let rpw = document.getElementById("rpass").value;

        let nam = document.getElementById("name").value;
        let gete = document.getElementById("email").value;
        let getp = document.getElementById("pass").value;
        let getrp = document.getElementById("rpass").value;
        // let win = window.open(" ", " ", "width=400px,height=500px");


        if (nam.length <= 4) {


            document.getElementById("nameerror").innerHTML = `<p style="color: ;"> Input Minimum 4 Letters </p>`

        }
        else {
            document.getElementById("nameerror").innerHTML = `<p style="color: green;">Input Correct </p>`

        }

        if (result) {
            document.getElementById("emailerror").innerHTML = `<p style="color: green;">Your email is valid </p>`

        } else {
            // alert("Email Is Not valid");
            document.getElementById("emailerror").innerHTML = `<p style="color: ;">Invalid;Exm:username@domain.extension </p>`
        }


        if (resultP) {
            document.getElementById("passerror").innerHTML = `<p style="color: green;">Password Strong And Good</p>`

        } else {
            document.getElementById("passerror").innerHTML = `<p style="color: ;">Must contain at least  one number and <br> one uppercase and lowercase letter<br> and at least 8 or more characters </p>`

        }

        if (rpw == "") {
            document.getElementById("rpasserror").innerHTML = `<p style="color: ;">Password Not Match</p>`
        } else if (rpw != pw1) {
            document.getElementById("rpasserror").innerHTML = `<p style="color: ;">Password Not Match</p>`
        } else {
            document.getElementById("rpasserror").innerHTML = `<p style="color: green;">Password Match</p>`

        }

        

    };

};

function emailCheck() {

    let gete = document.getElementById("email").value;
    let getp = document.getElementById("pass").value;
    let getrp = document.getElementById("rpass").value;

    let obj = new emailClass(gete, getp, getrp, gender, hobbyValue, location);
    obj.eclassFunction();
};
