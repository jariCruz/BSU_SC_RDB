//check of user isn't logged in and pressed download or view pdf
//this is for viewing pdf
function needToLoginView() {
    swal({
        title: "Sign in first!",
        text: "You need to sign in first to view full pdf.",
        icon: "error",
        button: true
        })
    }

//this is for downloading pdf
function needToLoginDownload() {
    swal({
        title: "Sign in first!",
        text: "You need to sign in first to download pdf.",
        icon: "error",
        button: true
    })
}