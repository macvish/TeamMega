validateForm  = () => {
    const username = document.loginForm.username.value;
    const password = document.loginForm.password.value;
    if (username == "") {
        alert("Please, Fill In a Valid Name");
        document.form.username.focus();
        return false;
    }
    if (password == "") {
        alert("Please, Enter Your Password");
        document.form.password.focus();
        return false;
    }
} 