function checknull() {
    if(form.fname.value == '') {
        alert('กรุณากรอกชื่อของท่านก่อน')
        form.fname.focus()
        return false
    }
    else if(form.lname.value == '') {
        alert('กรุณากรอกนามสุกลของท่านก่อน')
        form.lname.focus()
        return false
    }else if(form.email.value == '') {
        alert('กรุณากรอกอีเมลของท่านก่อน')
        form.email.focus()
        return false
    }else if(form.username.value == '') {
        alert('กรุณาตั้งชื่อผู้ใช้ของท่านก่อน')
        form.username.focus()
        return false
    }
    else if(form.password.value == '') {
        alert('กรุณาตั้งรหัสผ่านของท่านก่อน')
        form.password.focus()
        return false
    }
    else if(form.passwordag.value == '') {
        alert('กรุณาตั้งรหัสผ่านของท่านอีกครั้ง')
        form.passwordag.focus()
        return false
    }
    else {
        alert('ท่านได้สมัครสมาชิกเรียบร้อยเเล้ว')
    }
}

