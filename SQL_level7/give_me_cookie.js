function generate_token(length) {
    let token = localStorage.getItem("token");

    // لو التوكن مش موجود في localStorage، هننشئه
    if (!token) {
        const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        token = "";  // Initialize token as empty string
        for (let i = 0; i < length; i++) {
            token += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        localStorage.setItem("token", token);  // تخزين التوكن في localStorage
        document.cookie = "user_token=" + token;  // تخزين التوكن في الـ cookies
    } else {
        document.cookie = "user_token=" + token;  // لو التوكن موجود في localStorage، نحفظه في الـ cookies
    }

    // إرسال التوكن إلى السيرفر
    fetch('index.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'user_token=' + token  // تأكد من أنك بعت التوكن بشكل صحيح
    })
    .then(response => {
        return response.text();  // حول الرد إلى نص
    })
    .then(data => {
        // عرض الرسالة في الصفحة
        let mes_we = document.createElement("div");
        mes_we.className = "alert alert-primary";
        mes_we.textContent = data;
        document.getElementById("say_welcome").appendChild(mes_we);
    })
    .catch(error => {
        console.error('Error in sending token', error);  // لو فيه مشكلة في الاتصال بالسيرفر
    });
}

generate_token(20);  // استدعاء دالة توليد التوكن
